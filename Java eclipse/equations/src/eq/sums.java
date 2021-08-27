package eq;

import java.util.Scanner;

public class sums {
public static void main(String[] args){
	String name;
	int a = 50;
	int b ;
	System.out.println("This is a fortune estimator");
	System.out.print("choose a number between (1-9) and enter your name");
	Scanner input = new Scanner(System.in);
	b = input.nextInt();
	int c = a*b;
	
	
	
	
	name = input.nextLine();
	System.out.print(name );
	System.out.print("  you have ");
	
	System.out.print(c);
	System.out.print("  lucks remmaining");
	
	
	
	
	
	
	
	
}
}
