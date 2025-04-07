	import java.util.Scanner;
	public class Cantina {
	    public static void main(String[] args) {
	        
	        Scanner in = new Scanner (System.in); 
	        int pedido; 
	        
	        System.out.println("Por favor, digite o número de seu pedido de 1 a 5");
	        pedido = in.nextInt();
	        
	        switch (pedido){ 
	            case 1: 
	            		System.out.println("Cachorro quente R$ 6,50");
	            		break;
	            case 2: 
	            		System.out.println("Cheeseburguer R$ 8,00");
	            		break; 
	            case 3: 
	            		System.out.println("X-salada R$ 9,50");
	            		break; 
	            case 4: 
	            		System.out.println("misto quente R$ 7,50"); 
	            		break; 
	            case 5: 
	            		System.out.println("Pão na chapa R$ 5,00"); 
	            default: 
	            		System.out.println("Pedido inválido");
	            		
	        in.close();
	        }   
	        
	    }
	    
	}
