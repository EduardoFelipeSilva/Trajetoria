import java.util.Scanner;
public class Exercico4 {
	    public static void main(String[] args){
	        Scanner in = new Scanner (System.in); 
	         
	        double precoOriginal, margemLucro, precoVenda, conta;
	        String continuar; 
	        
	        do{
	            System.out.println("Digite o pre�o do produto:");
	            precoOriginal = in.nextDouble(); 
	            System.out.println("Digite a margem de lucro:"); 
	            margemLucro = in.nextDouble(); 
	            
	            conta = (precoOriginal*margemLucro)/100; 
	            precoVenda = precoOriginal + conta; 
	            
	            System.out.println("Sua venda ser�: "+precoVenda); 
	            System.out.println("Voc� deseja continuar a execucao?(S/N)");
	            continuar = in.next(); 
	            
	        }while (continuar.equalsIgnoreCase("S")); 
	        
	        in.close(); 
	    }
	}