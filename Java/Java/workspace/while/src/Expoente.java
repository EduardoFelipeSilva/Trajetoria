	import java.util.*;
	public class Expoente {
	    
	    public static void main(String[] args) {
	        Scanner in = new Scanner (System.in);
	        
	        int i = 1, e, b; 
	        double r =0; 
	        
	        
	        System.out.println("Digite o numero da base:");
	        b = in.nextInt(); 
	        System.out.println("Digite o expoente:"); 
	        e = in.nextInt(); 
	        
	        r= b*b;
	        while (i < e-1){
	            
	        r = r*b; 
	        i++;
	        }
	        System.out.println("O resultado é: "+r);
	        in.close();
	    }
	    
	}
