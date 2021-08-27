
public class employee {
	public String name;
	private int salary;
	
	public employee(String empname){
		name=empname;
		}
	
	private void salary(int money){
		salary=money;
		System.out.println("hallooo");
	} 
	
	public void print(){
		System.out.println("his name is  " + name);
		System.out.print("he earns : " + salary);
	}
	
	public static void main(String[]args){
		
		employee alex = new employee("alexander");
		alex.salary(240000);
		alex.print();
		
		
		
	}
	
	
	
	

}
