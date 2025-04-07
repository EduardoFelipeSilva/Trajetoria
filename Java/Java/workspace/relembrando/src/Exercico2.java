import java.util.Scanner; 
public class Exercico2 {
	
	    public static void main(String[] args){
	        Scanner in = new Scanner (System.in); 
	        
	        double valorHora, aulaDada, salarioLiquido, salarioBruto, desconto; 
	        
	        System.out.println("Digite o valor da hora da aula: "); 
	        valorHora = in.nextDouble(); 
	        System.out.println("Digite o N° de aulas dadas no mês: "); 
	        aulaDada = in.nextDouble(); 
	        
	        salarioBruto = (aulaDada*valorHora); 
	        System.out.println("Seu salario bruto é: " +salarioBruto);
	        
	            if (salarioBruto <= 1212.00){
	                desconto = salarioBruto*7/100;
	                salarioLiquido = salarioBruto-desconto;
	                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	                
	            } else if (salarioBruto <= 2427.35){
	            		desconto = salarioBruto*9/100;
		                salarioLiquido = salarioBruto-desconto;
		                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	        
	            } else if (salarioBruto <= 3641.03){
	                    	 desconto = salarioBruto*12/100;
	     	                salarioLiquido = salarioBruto-desconto;
	     	                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	        
	            } else if (salarioBruto <= 7087.22){
	                        	 desconto = salarioBruto*14/100;
	         	                salarioLiquido = salarioBruto-desconto;
	         	                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	        
	            } else if (salarioBruto <= 12136.79){
	                            	 desconto = salarioBruto*14.5/100;
	             	                salarioLiquido = salarioBruto-desconto;
	             	                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	        
	            } else if (salarioBruto <= 24273.57){
	                                	 desconto = salarioBruto*16.5/100;
	                 	                salarioLiquido = salarioBruto-desconto;            
	                 	                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	        
	            } else if (salarioBruto  <= 47333.46){
	                                    	 desconto = salarioBruto*19/100;
	                     	                salarioLiquido = salarioBruto-desconto;
	                     	                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	        
	            } else {
	                                        	 desconto = salarioBruto*22/100;
	                         	                salarioLiquido = salarioBruto-desconto;
	                         	                 System.out.println("Seu salario liquido é: "+salarioLiquido);
	           }
	        in.close();     
	    }
	}

