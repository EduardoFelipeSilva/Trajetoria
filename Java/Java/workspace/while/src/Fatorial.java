	import java.util.*; 
	public class Fatorial {
	    
	    public static void main(String[] args) {
	        Scanner in = new Scanner (System.in);
	        int i = 1, n, f, s; 
	        
	        System.out.println("Digite seu numero:");
	        n = in.nextInt(); 
	        
	        f = n;
	        s = n; 
	        while (s > 1){
	            
	        s = n-i;
	        f = f*s;     
	            
	        i++;
	        }
	        System.out.println("Seu numero fatorado é:"+f);
	        in.close();
	    										
	    }
	}