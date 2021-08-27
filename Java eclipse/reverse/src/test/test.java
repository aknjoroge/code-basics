package test;

import java.util.Scanner;

public class test {
	
	public static void main (String [] args) {
		Scanner input = new Scanner(System.in);
	System.out.println("enter name");
	String get =input.nextLine();
	
	StringBuffer one = new StringBuffer(get);
	one.reverse();
	System.out.println("in reverse is "+one);
	
	
	}

}
