#include <stdio.h>
#include <stdlib.h>
#include <termios.h>
#include <unistd.h>


int p[21][21]={0}; 
int opened[21][21]={0}; //luu giá trị khởi đầu
int flag[21][21]={0}; // Lưu boom, cờ boom
int bomb_flag_number = 0; //Số lương boom
int cs_row = 0, cs_col = 0; // Current position of Cursor
int maxrow, maxcol; //size của bàn cờ
int minum; //Số lượng node bình thường

int end_of_game = 0;


#define UP 0
#define RIGHT 1
#define DOWN 2
#define LEFT 3
#define ENTER 4
#define SPACE 5


//Board piece
#define MINE 9
#define EMPTY 0
#define QUESTION_FLAG 99
#define BOMB_FLAG 100
#define NO_FLAG 0


#define clear() printf("\033[H\033[J")

#define RED 31
#define GREEN 32
#define ORANGE 33
#define BLUE 34
#define MAGENTA 35
#define CYAN 36
#define YELLOW 38
#define NORMAL 0

void iprint(char str[], int color) {
  switch (color) {
    case RED: printf("\x1b[31m"); printf("%s",str); printf("\033[0m"); break;
    case GREEN: printf("\x1b[32m"); printf("%s",str); printf("\033[0m"); break;
    case ORANGE: printf("\x1b[33m"); printf("%s",str); printf("\033[0m"); break;
    case BLUE: printf("\x1b[34m"); printf("%s",str); printf("\033[0m"); break;
    case MAGENTA: printf("\x1b[35m"); printf("%s",str); printf("\033[0m"); break;
    case CYAN: printf("\x1b[35m"); printf("%s",str); printf("\033[0m"); break;
    case YELLOW: printf("\033[38;5;228m"); printf("%s",str); printf("\033[0m"); break;
    default: printf("%s", str);
  }
}



// scanffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
int getch() {
  struct termios oldt,
                 newt;
  int            ch;
  tcgetattr( STDIN_FILENO, &oldt );
  newt = oldt;
  newt.c_lflag &= ~( ICANON | ECHO );
  tcsetattr( STDIN_FILENO, TCSANOW, &newt );
  ch = getchar();
  tcsetattr( STDIN_FILENO, TCSANOW, &oldt );
  return ch;
}

// khởi tạo màu
int get_p_color(int row, int col){

  if (cs_row == row && cs_col == col)
  	return YELLOW;

  if ( !opened[row][col] )
  	return NORMAL;

  switch (p[row][col]) {
    case EMPTY:
    	if (opened[row][col])
    		return BLUE;
    	else
    		return NORMAL;
    case 1: return GREEN;
    case 2: return ORANGE;
    case 3: return MAGENTA;
    case 4: return CYAN;
    case MINE: return RED;
    default: return NORMAL;
  }
}




char print_info(int line){
  switch (line) {
    case 0: iprint("Do Bom China", GREEN); break;
    case 1: iprint("         Coded by Khang", CYAN); break;
    case 3: iprint("____________________________", GREEN); break;
    case 5: printf("So luong boom: %d", minum - bomb_flag_number); break;
    case 7: iprint("    *** Cach choi ***", GREEN); break;
    case 8: iprint("Dung 4 phim mui ten de di chuyen", GREEN); break;
    case 9: iprint("Enter/Space de open", GREEN); break;
    case 10: iprint("b co boom", GREEN); break;
    case 11: iprint("f co cau hoi", GREEN); break;
    case 12: iprint("n choi lai ???.", GREEN); break;
  }
}



//Print a piece of the board
void print_p(int row, int col){

  int color; // Color of position

 
  color = get_p_color(row, col);// mau vang

  if (!opened[row][col]) {

  	if (flag[row][col] == QUESTION_FLAG)
	    iprint("?", color);
	else if (flag[row][col] == BOMB_FLAG)
		iprint("x", color);
	else
		 iprint("⎔", color);
     
		

  } else {
  	 switch (p[row][col]) {
	    case EMPTY:
	    	if (opened[row][col])
			{
                                iprint("o", color);
			}
	    		
			else
				iprint("⎔", color);
	    	break;
	    case MINE: iprint("M", color); break;
	    case 1: iprint("1", color); break;
	    case 2: iprint("2", color); break;
	    case 3: iprint("3", color); break;
	    case 4: iprint("4", color); break;
	  }
  }

}

//tao ma tran
void print_board(){
  int i,j;
  clear();
  printf("\n");
  for (i = 0; i <= maxrow; i++) {
     printf("  ");
     for (j = 0; j <= maxcol; j++) {
       print_p(i, j); printf(" ");
     }
     printf(" ");
     print_info(i);
     printf("\n");
  }
  printf("\n");
}


// đếm các node xung quanh
int mi_count(int row, int col){
  int i,j;
  int near_minum = 0;
  for (i = -1; i < 2; i++) {
    for (j = -1; j < 2; j++) {
      if (row + i >= 0 && row + i <= maxrow && col + j >= 0 && col + j <= maxcol){
        if (p[row + i][col + j] == MINE)
        	near_minum += 1;
      }
    }
  }
  return near_minum;
}

// Generate mines on board
void gen_mine(){
  int i, j;
  time_t t;
  int r;
  int row, col;
  int iminum = 0; 
  srand((unsigned) time(&t));
  while (iminum < minum) {
    r = rand() % ((maxrow + 1) * (maxcol + 1));
    row = (r - 1) / (maxcol + 1);
    col = r - row * (maxrow + 1) - 1;

    int should_add = 1; //số lương <4 => tạo zô lỗi 252 
    for (i = -1; i < 2; i++) {
	    for (j = -1; j < 2; j++) {
	      if (p[row + i][col + j] != MINE && mi_count(row + i, col + j) > 3) {
	      	should_add = 0;
	      }
	    }
	  }
    if (p[row][col] == EMPTY && should_add == 1) {
      p[row][col] = MINE;
      iminum += 1;
    };
  }
}

// đếm và tạo ra số lương node
void gen_num(){
  int i,j;
  for (i = 0; i <= maxrow; i++) {
    for (j = 0; j <= maxcol; j++) {
      if (p[i][j] == EMPTY){
        p[i][j] = mi_count(i, j);
      }
    }
  }
}


// đếm vị trí chưa mở :>
int unopened_count(){
	int unopened, i, j;
	for (i = 0; i <= maxrow; i++) {
		for (j = 0; j <= maxcol; j++) {
			if (!opened[i][j])
				unopened += 1;
			}
		}
	return unopened;
}

// kt win chưa dùng trong main
void check_win(int row, int col){ // row, col already opened
	int i, j;
	int won = 0; 
	if (p[row][col] == MINE) {
		won = -1; 
	} else if (unopened_count() == minum) {
		won = 1; 
	} else if (bomb_flag_number == minum){ 
		won = 1;
		for (i = 0; i <= maxrow; i++) {
			for (j = 0; j <= maxcol; j++) {
				if (flag[i][j] == BOMB_FLAG && p[i][j] != MINE) {
					won = 0;
				}
			}
		}
	}

	switch(won) {
		case -1:{ //Lose
			for (i = 0; i <= maxrow; i++) {
				for (j = 0; j <= maxcol; j++) {
					if (p[i][j] == MINE) {
						opened[i][j] = 1;
					}
				}
			}
			print_board();
			iprint("Thua rồi e :>>> chơi lai ấn n", GREEN);
			end_of_game = 1;
			break;
		}
		case 1:{ //Won
			for (i = 0; i <= maxrow; i++) {
				for (j = 0; j <= maxcol; j++) {
					if (p[i][j] == MINE) {
						opened[i][j] = 1;
					}
				}
			}
			print_board();
			iprint("Đéo thể tin đc là chú đã thắng out game đi", GREEN);
			end_of_game = 1;
			break;
		}


	}
}


//mo vị trí trống trên ma trận
void open_empty_pos(int row, int col) {
	int i, j;
        
	opened[row][col] = 1; 
	if (p[row][col] == EMPTY) {
		for (i = -1; i < 2; i++) {
		    for (j = -1; j < 2; j++) {
				if (i!=0 || j!=0) { 
					if (row + i >= 0 && row + i <= maxrow && col + j >=0 && col + j <= maxcol) { 
						if (!opened[row + i][col + j])
							open_empty_pos(row + i, col + j);
						   
					}
				}
			}
		}
	}
}

// mở vị trí
int open(int row, int col) {
	if (!opened[row][col]) {
		switch(p[row][col]) {
			case 1:
			case 2:
			case 3:
			case 4: opened[row][col] = 1; break;
			case EMPTY: open_empty_pos(row, col); break;
		}
		print_board();
	}

	// kt Win
	check_win(row, col);
}


// đặc cờ câu hỏi
void question(int row, int col) {
	if (!opened[row][col]) {
		if (flag[row][col] != QUESTION_FLAG)
			flag[row][col] = QUESTION_FLAG;
		else
			flag[row][col] = NO_FLAG;
		print_board();
	}
}


// đặc cờ boom =)) hên xui 
void bomb_flag(int row, int col) {
	if (!opened[row][col]) {
		if (flag[row][col] != BOMB_FLAG) {
			flag[row][col] = BOMB_FLAG;
			bomb_flag_number += 1;
		} else {
			flag[row][col] = NO_FLAG;
			bomb_flag_number -= 1;
		}
		print_board();
	}
}


//zô game nè
int newgame() { //return 0: newgame; return 1: cancel
	int i, j;
	char level;

	do { // Input level
		print_board();
		iprint("Chon lever choi 1,2,3 thoat an phim c", GREEN);
		level = getch();
	} while (level!='1' && level!='2' && level!='3' && level!='c');

	switch(level) {
		case 'c': return 1;
		case '1': // Level 1
			{
				maxrow = 12;
				maxcol = 12;
				minum = 20;
				cs_row = 6, cs_col = 6;
				break;
			}
		case '2': // Level 2
			{
				maxrow = 15;
				maxcol = 15;
				minum = 30;
				cs_row = 8, cs_col = 8;
				break;
			}
		case '3': // Level 3
			{
				maxrow = 20;
				maxcol = 20;
				minum = 60;
				cs_row = 10, cs_col = 10;
				break;
			}
	}


	//Reset Variables
	for (i = 0; i <= maxrow; ++i) {
		for (j = 0; j <= maxcol; ++j) {
			p[i][j] = 0;
			opened[i][j] = 0;
			flag[i][j] = 0;
		}
	}

	bomb_flag_number = 0;
	end_of_game = 0;

	gen_mine();
  	gen_num();

  	print_board();

}


// Process input keys
int pressed(int key){
  switch(key) {
  	case UP: if(!end_of_game)
  		{
  			if (cs_row == 0) {
  				cs_row = maxrow;
  			} else {
  				cs_row -= 1;
  			}
  			print_board();
  			break;
  		}
  	case DOWN: if(!end_of_game)
  		{
  			if (cs_row == maxrow) {
  				cs_row = 0;
  			} else {
  				cs_row += 1;
  			}
  			print_board();
  			break;
  		}
  	case LEFT: if(!end_of_game)
  		{
  			if (cs_col == 0) {
  				cs_col = maxcol;
  			} else {
  				cs_col -= 1;
  			}
  			print_board();
  			break;
  		}
  	case RIGHT: if(!end_of_game)
  		{
  			if (cs_col == maxcol) {
  				cs_col = 0;
  			} else {
  				cs_col += 1;
  			}
  			print_board();
  			break;
  		}
  	case SPACE:
  	case ENTER: if(!end_of_game) {
  				open(cs_row, cs_col); break;
  			}
  	case 'f': if(!end_of_game) question(cs_row, cs_col); break;
  	case 'b': if(!end_of_game) bomb_flag(cs_row, cs_col); break;
  	case 'n': newgame(); break;
  }
}


int main(int argc, char *argv[]) {

  //init
  maxrow = 20;
  maxcol = 20;
  minum = 60;
  end_of_game = 0;

  print_board();
  gen_mine();
  gen_num();
  print_board();

  // Main loop
  // Recognize input keys from keyboard
  int ch;
  int exit;
  while (1) {
      ch = getch();
      switch (ch) {
        case '\033':
          	{
	            getch(); //remove [
	            switch(getch()) { // the real value
	              case 'A':
	                pressed(UP);
	                break;
	              case 'B':
	                pressed(DOWN);
	                break;
	              case 'C':
	                pressed(RIGHT);
	                break;
	              case 'D':
	                pressed(LEFT);
	                break;
	            }
	            break;
        	}
        case '\n': pressed(ENTER); break;
        case ' ': pressed(SPACE); break;
        default: pressed(ch);
      }

  }
  return 0;
}
