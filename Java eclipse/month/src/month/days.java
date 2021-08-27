package month;
import java.util.Scanner;
public class days {
	public static void main(String [] args){
		Scanner imput = new Scanner(System.in);
		String name;
		int month,days;
		System.out.println("halloo");
		System.out.println("what is your name?");
		name = imput.nextLine();
		System.out.print("Alright ");
		System.out.print(name);
		System.out.println(" This is a callender!");
		
		System.out.println("What number of month are u in?");
		System.out.println("between 1 - 12 ?");
		month = imput.nextInt();
		System.out.println("lets continue");
		System.out.println("what number of day(1 -7) are u in?");
		days =imput.nextInt();
		System.out.println("GOOD");
		System.out.print("this are the results ");
		System.out.println( name);
		System.out.println("The day is");
		System.out.println(day(days));
		System.out.println("And the month is");
		System.out.println(months( month));
		
		
		
		
		
		
		
		
		
		
		
	}
	
 //	public static String abv(String abv){
		
	//	switch(abv){
	//	case monday:
		//	System.out.print("st");
			//break;
		//}
		
	//	return abv;
//}

	public static int months(int months){
		switch(months){
		case 1:
			System.out.print("january");
			break;
		case 2:
			System.out.print("february");
			break;
		case 3:
			System.out.print("march");
			break;
		case 4:
			System.out.print("April");
			break;
		case 5:
			System.out.print("may");
			break;
		case 6:
			System.out.print("june");
			break;
		case 7:
			System.out.print("july");
			break;
		case 8:
			System.out.print("August");
			break;
		case 9:
			System.out.print("september");
			break;
		case 10:
			System.out.print("octorber");
			break;
		case 11:
			System.out.print("november");
			break;
		case 12:
			System.out.print("December");
			break;
			
		}
		
			
	   
		
		return months;
		
		
	}
		
	public static int day(int day){
		if(day >7 ){
			System.out.println("error!! incorrect day");
		}
		if(day <1 ){
			System.out.println("error!! incorrect day");
		}
		else if(day == 1){
			System.out.println("MONDAY " +day+"st" );
		}
		else if(day == 2){
			System.out.println("TUESDAY " +day+ "nd");
		}
		else if(day == 3){
			System.out.println("WEDNESDAY " +day+"rd");
		}
		else if(day == 4){
			System.out.println("THURDAY " +day +"th");
		}
		else if(day == 5){
			System.out.println("FRIDAY " +day+ "th");
		}
		else if(day == 6){
			System.out.println("SATURDAY " +day+ "th");
		}
		else if(day == 7){
			System.out.println("SUNDAY " +day +"th");
		}
		else{
			System.out.println("day entered is ");
			}
		
		
		
	return day;	
		
	
		
	
	}
}
		
	
	
	
	

