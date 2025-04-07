	import java.util.*;
	public class Altura {
	    
	    public static void main(String[] args) {
	        Scanner in = new Scanner (System.in);
	        
	        int i = 0; 
	        double Joao = 134, Pedro = 145;  
	        
	        while (Joao <= Pedro){
	        
	        	Pedro = Pedro + 2; 
	        	Joao = Joao + 2.5; 
	        												
	        i++;
	        }    
	        System.out.println("Anos para Joao ser mais alto que Pedro: "+i);
	        in.close();
	    }
	    
	}
