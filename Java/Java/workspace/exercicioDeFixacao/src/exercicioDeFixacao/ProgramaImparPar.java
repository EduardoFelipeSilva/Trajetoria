package exercicioDeFixacao;
import java.util.*; 
public class ProgramaImparPar {
	public static void main(String[] args) { 
		Scanner ler = new Scanner (System.in); 
		int n,r;
	
		
		System.out.print("Digite o numero");
		n = ler.nextInt(); 
		r = n%2;
	    
		if (r == 0) {
			System.out.println("O numero é par");    
		} else {
			System.out.println("O numero é impar");
		} 
		ler.close();
	}

}
