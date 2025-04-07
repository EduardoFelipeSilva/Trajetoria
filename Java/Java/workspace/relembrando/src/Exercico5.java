import java.util.Scanner; 
public class Exercico5 {
	
	    public static void main(String[] args){ 
	    	
	         
	        
	        final int TAM = 2; 
	        int a[], b[], c[], i; 
	        
	        a = new int [TAM]; 
	        b = new int [TAM]; 
	        c = new int [TAM]; 
	        
	        try(Scanner in = new Scanner (System.in)) {
	        
	        	for (i=0; i<TAM; i++){ 
	        		System.out.println("Digite o "+(i+1)+" valor: "); 
	        		a[i] = in.nextInt();
		        }
		        
		        for (i=0; i<TAM; i++){
		            System.out.println("Digite o "+(i+1)+" valor: "); 
		            b[i] = in.nextInt();
		            c [i] = a[i]+b[i];
		        }
		        
		        System.out.print("\nC[] =[ "); 
		        for (i=0; i<TAM; i++){
		            System.out.print(c[i]+ " ");
		        }
		        System.out.print("]");
		        in.close();
	        }
	    }
	 
	}
