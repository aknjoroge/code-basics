package ifelse;
import java.util.Scanner;
public class grade {
public static void main(String[]args){
	
	Scanner imput = new Scanner(System.in);
	String name;
	int grade;
	System.out.println("Hallooo we will compute grades");
	System.out.println("lets start");
	System.out.println("Enter a student name");
	name =imput.nextLine();
	System.out.println("Good now enter grade");
	grade =imput.nextInt();
	System.out.println("Here are the results");
	System.out.println(name);
	
	
	
	if(grade > 1 && grade < 100){
		if(grade >=20){
			System.out.println("you have passed the pass mark");
		}
		if(grade < 20){
			System.out.println("you have Failed");
		}
		if (grade >=21 && grade <=40){
			System.out.println("Your grade is a C");
			}
		if(grade >=41 && grade <= 70){
			System.out.println("Your grade is a B");
		}
		if(grade >=71 && grade <= 100){
			System.out.println("Your grade is a A");
		}
		
	}
	else{System.out.println("syntax error");
	}
	System.out.println("DONE");
	
}	
}		

	
