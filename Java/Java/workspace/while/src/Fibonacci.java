
	import java.util.*;
	public class Fibonacci  {
	     
		    public static void main(String[] args) {
		        Scanner in = new Scanner (System.in);
		        
		        int i = 2, temporario=0, anterior, atual=1, n; 
		        
		        System.out.println("Digite Ate onde deseja a sequ�ncia de fibonacci :"); 
		        n = in.nextInt(); 
		        
		        
		        while (i <= n){
		          anterior=temporario;
		          temporario=atual;
		          atual=anterior+atual;
		            
		            
		      
		            i++;
		        }
		        System.out.println("A sequ�ncia de fibonacci �"+atual);
		        in.close();
		        
		    }
		    
		}