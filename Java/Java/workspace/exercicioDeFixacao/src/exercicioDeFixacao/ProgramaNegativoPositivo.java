package exercicioDeFixacao;
import java.util.*;
public class ProgramaNegativoPositivo {
	public static void main(String[] args) {
		Scanner ler =new Scanner (System.in); 
		int n,r; 
		
		System.out.print("Digite o Primeiro numero:");
		n = ler.nextInt();
		
		if (n >=0) {
			System.out.print("O numero é positivo");
		} else {
			System.out.print("O numero é negativo");
		}
		ler.close();
	}

}
