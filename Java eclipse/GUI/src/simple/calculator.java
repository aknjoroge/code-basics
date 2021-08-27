package simple;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.JTextField;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.Color;
import java.awt.Font;

public class calculator {
	static JButton btnNewButton;
	double one,two;
	 static String power= "off";
	static JButton button;
	String state="notset";
	private JFrame frame;
	String operator;
	static JButton button_1, button_2;
	static JButton button_3;
	static JButton button_4;
	static JButton button_5;
	static JButton button_6;
	static JButton button_7;
	static JPanel panel;
	static JButton button_8;
	static JButton button_9;
	static JButton button_10;
	static JButton button_11;
	static JButton button_12;
	static JButton button_13;
	static JButton button_14;
	private static JTextField maintext;
	static JButton btnNewButton_1;
	static JButton btnNewButton_2;
	static JButton btnNewButton_3;
	private static JButton btnNewButton_4;
	private static JButton btnNewButton_5;
	private static JLabel lblNewLabel;
	
	
	public static void main(String[] args) {
		
		
		
		
		EventQueue.invokeLater(new Runnable() {
			
			public void run() {
				try {
					calculator window = new calculator();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	
	private static void powercheck() {
		
		if(power.equals("off")) {
			btnNewButton_4.setText("ON");
			button_3.setVisible(false);
			btnNewButton_4.setBounds(180, 50, 78, 38);
			btnNewButton_5.setVisible(true);
			lblNewLabel.setVisible(true);
			button_1.setVisible(false);
			button_2.setVisible(false);
			button_4.setVisible(false);
			button_5.setVisible(false);
			button_6.setVisible(false);
			button_7.setVisible(false);
			button_8.setVisible(false);
			button_9.setVisible(false);
			button_10.setVisible(false);
			maintext.setVisible(false);
			button_11.setVisible(false);
			button_12.setVisible(false);
			button_13.setVisible(false);
			button_14.setVisible(false);
			
			btnNewButton_1.setVisible(false);
			btnNewButton_2.setVisible(false);
			btnNewButton_3.setVisible(false);
			btnNewButton.setVisible(false);
			button.setVisible(false);
			
			
		}else if(power.equals("on")) {
			btnNewButton_4.setText("OFF");
			btnNewButton_5.setVisible(false);
			lblNewLabel.setVisible(false);
			button_3.setVisible(true);
			btnNewButton_4.setBounds(16, 39, 78, 38);
			button_1.setVisible(true);
			button_2.setVisible(true);
			button_4.setVisible(true);
			button_5.setVisible(true);
			
			button_6.setVisible(true);
			button_7.setVisible(true);
			button_8.setVisible(true);
			button_9.setVisible(true);
			button_10.setVisible(true);
			maintext.setVisible(true);
			button_11.setVisible(true);
			button_12.setVisible(true);
			button_13.setVisible(true);
			button_14.setVisible(true);
			btnNewButton_1.setVisible(true);
			btnNewButton_2.setVisible(true);
			btnNewButton_3.setVisible(true);
			btnNewButton.setVisible(true);
			button.setVisible(true);
			
			
			
			
		}	else {
			
		}
		

		
	
		
	}


	public calculator() {
		
		initialize();
	}

	

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		
		frame = new JFrame();
		frame.setBounds(100, 100, 460, 476);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		 panel = new JPanel();
		panel.setBackground(Color.WHITE);
		panel.setBounds(0, 0, 449, 437);
		frame.getContentPane().add(panel);
		panel.setLayout(null);
		
		
		
		lblNewLabel = new JLabel("TECHKEY.CO.KE ");
		lblNewLabel.setForeground(Color.RED);
		lblNewLabel.setBounds(172, 347, 123, 14);
		panel.add(lblNewLabel);
		
		btnNewButton_5 = new JButton("TURN ME ON");
		btnNewButton_5.setFont(new Font("Tahoma", Font.PLAIN, 17));
		btnNewButton_5.setForeground(Color.WHITE);
		btnNewButton_5.setBackground(Color.RED);
		btnNewButton_5.setBounds(96, 159, 241, 156);
		panel.add(btnNewButton_5);
		
		 btnNewButton = new JButton("AC");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				maintext.setText(null);
			}
		});
		btnNewButton.setBounds(16, 114, 91, 46);
		panel.add(btnNewButton);
		
		
		 button = new JButton("<");
		 button.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		  if (maintext.getText().length() > 0) {
		 			  state="notset";
		 	          StringBuilder one = new StringBuilder(maintext.getText());
		 	          one.deleteCharAt(maintext.getText().length() - 1);
		 	          String back = one.toString();
		 	         maintext.setText(back);
		 	        }
		 		
		 		
		 	}
		 });
		button.setBounds(122, 114, 91, 46);
		panel.add(button);
		
		 button_1 = new JButton("%");
		button_1.setBounds(228, 115, 91, 46);
		panel.add(button_1);
		
		 button_2 = new JButton("/");
		 button_2.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		String data = maintext.getText().toString();
		 		
		 		  one =Double.parseDouble(data);
		 		 maintext.setText(null);
		 		 operator ="divide";
		 		
		 		
		 	}
		 });
		button_2.setBounds(328, 114, 91, 46);
		panel.add(button_2);
		
		 button_3 = new JButton("7");
		 button_3.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
	 			String button = maintext.getText() + button_3.getText();
			      maintext.setText(button);	
		 		}
		 		else {
		 			String button = maintext.getText() + button_3.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 	}
		 });
		button_3.setBounds(14, 191, 91, 46);
		panel.add(button_3);
		
		 button_4 = new JButton("*");
		 button_4.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
				
			  String data = maintext.getText().toString();
			  one=Double.parseDouble(data);
			  operator="multiply";
			    maintext.setText(null);
			    
				
			}
		});
		button_4.setBounds(326, 191, 91, 46);
		panel.add(button_4);
		
		 button_5 = new JButton("9");
		 button_5.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + button_5.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_5.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 	}
		 });
		button_5.setBounds(226, 192, 91, 46);
		panel.add(button_5);
		
		 button_6 = new JButton("8");
		button_6.setBounds(120, 191, 91, 46);
		button_6.addActionListener(new ActionListener() {
			
			public void actionPerformed(ActionEvent arg0) {
				
if(state.equals("isset")) {
	state="notset";
	maintext.setText(null);
		 			String button = maintext.getText() + button_6.getText();
			      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_6.getText();
				      maintext.setText(button);
		 		}
				
				 
				
								
			}
		});
		panel.add(button_6);
		
		 button_7 = new JButton("4");
		 button_7.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + button_7.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_7.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 	}
		 });
		button_7.setBounds(11, 257, 91, 46);
		panel.add(button_7);
		
		 button_8 = new JButton("-");
		 button_8.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		String data= maintext.getText().toString();
		 		one=Double.parseDouble(data);
		 		operator="minus";
		 		maintext.setText(null);
		 		
		 		
		 	}
		 });
		button_8.setBounds(323, 257, 91, 46);
		panel.add(button_8);
		
		 button_9 = new JButton("6");
		 button_9.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + button_9.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_9.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 		
		 		
		 	}
		 });
		button_9.setBounds(223, 258, 91, 46);
		panel.add(button_9);
		
		 button_10 = new JButton("5");
		 button_10.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + button_10.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_10.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 	}
		 });
		button_10.setBounds(117, 257, 91, 46);
		panel.add(button_10);
		
		 button_11 = new JButton("1");
		 button_11.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + button_11.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_11.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 	}
		 });
		button_11.setBounds(10, 331, 91, 46);
		panel.add(button_11);
		
		 button_12 = new JButton("+");
		 button_12.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		String data= maintext.getText().toString();
		 		one=Double.parseDouble(data);
		 		maintext.setText(null);
		 		operator="add";
		 		
		 	}
		 });
		button_12.setBounds(322, 331, 91, 46);
		panel.add(button_12);
		
		 button_13 = new JButton("3");
		 button_13.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + button_13.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_13.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 
		 	}
		 });
		button_13.setBounds(222, 332, 91, 46);
		panel.add(button_13);
		
		 button_14 = new JButton("2");
		 button_14.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + button_14.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + button_14.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 	}
		 });
		button_14.setBounds(116, 331, 91, 46);
		panel.add(button_14);
		
		maintext = new JTextField();
		maintext.setBounds(117, 35, 298, 46);
		panel.add(maintext);
		maintext.setColumns(10);
		
		 btnNewButton_1 = new JButton("0");
		 btnNewButton_1.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + btnNewButton_1.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			String button = maintext.getText() + btnNewButton_1.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 		
		 	}
		 });
		btnNewButton_1.setBounds(16, 388, 195, 38);
		panel.add(btnNewButton_1);
		
		 btnNewButton_2 = new JButton(".");
		 btnNewButton_2.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		if(state.equals("isset")) {
		 			maintext.setText(null);
		 			state="notset";
		 			String button = maintext.getText() + btnNewButton_2.getText();
				      maintext.setText(button);
		 		}
		 		else {
		 			
		 			String button = maintext.getText() + btnNewButton_2.getText();
				      maintext.setText(button);
		 		}
		 		
		 		
		 	}
		 });
		btnNewButton_2.setBounds(226, 389, 89, 37);
		panel.add(btnNewButton_2);
		
		 btnNewButton_3 = new JButton("=");
		 btnNewButton_3.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		String data = maintext.getText().toString();
		 		two = Double.parseDouble(data);
		 		maintext.setText(null);
		 		if(operator.equals("divide")) {
		 			double ans =one/two;
		 			String answ= String.valueOf(ans);
		 			state="isset";
		 			maintext.setText(answ);
		 			
		 		}
		 		else if(operator.equals("multiply")) {
		 			double ans =one*two;
		 			String answ= String.valueOf(ans);
		 			state="isset";
		 			maintext.setText(answ);
		 		}
		 		else if(operator.equals("minus")) {
		 			double ans =one-two;
		 			String answ= String.valueOf(ans);
		 			state="isset";
		 			maintext.setText(answ);
		 		}
		 		else if(operator.equals("add")) {
		 			double ans =one+two;
		 			String answ= String.valueOf(ans);
		 			state="isset";
		 			maintext.setText(answ);
		 		}
		 		else {
		 			maintext.setText("Error");
		 			state="isset";
		 		}
		 		
		 		
		 		
		 		
		 	}
		 });
		btnNewButton_3.setBounds(328, 388, 89, 38);
		panel.add(btnNewButton_3);
		
		btnNewButton_4 = new JButton("");
		btnNewButton_4.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				if(power.equals("off")){
					power="on";
					powercheck();
//					btnNewButton_5.setVisible(false);
//					button_3.setVisible(true);
//					btnNewButton_4.setText("ON");
					
				}
				else if(power.equals("on")){
					power="off";
					powercheck();
//					btnNewButton_5.setVisible(true);
//					button_3.setVisible(false);
//					btnNewButton_4.setText("OFF");
				}
				
			}
		});
		btnNewButton_4.setBounds(16, 39, 78, 38);
		panel.add(btnNewButton_4);
		
		
		
		powercheck();
	}
}
