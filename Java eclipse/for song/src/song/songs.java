package song;
import java.util.Scanner;
public class songs {
	public static void main(String[] args){
		int drink;
		Scanner imput =new Scanner(System.in);
		System.out.print("this is a song ");
		System.out.println(" called drink");
		System.out.println("enter a number of drinks");
		drink =imput.nextInt();
		for(int a = 1;a<=drink;drink--){
			System.out.print(drink);
			System.out.println(" drinks are remaining");
			
			
			
		}
		System.out.print("more drinks for us");
	}

}
