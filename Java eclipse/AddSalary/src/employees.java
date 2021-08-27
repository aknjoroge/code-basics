import java.util.Scanner;
public class employees {
	
	public String name;
	public  int salary;
	
	public  employees(String  empname){
		
		name=empname;
		}
	public void salary(int empsalary){
		salary= empsalary;
	}
	
	public void print(){

		System.out.println("i am " + name);
		System.out.println("i earn " + salary);
	}
	
	public  void input(){
		String personal;
		int pers;
		Scanner input = new Scanner(System.in);
		System.out.print("what is your name");
	    personal=input.nextLine();
		System.out.print("what is your salary");
		pers=input.nextInt();
		 
		pers=salary;
		personal=name;
		
		
		
		
		
		
		
	}
	
	public static void main(String[]args){
		
		
		
		employees worker = new employees("alex");
		worker.input();
		
		
		worker.print();
		
		
		
	}
	

}
