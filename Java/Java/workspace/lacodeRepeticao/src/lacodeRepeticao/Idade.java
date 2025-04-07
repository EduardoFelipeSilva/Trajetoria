package lacodeRepeticao;

import java.util.*;
public class Idade {
	
		public static void main(String[] args) {
			Scanner ler = new Scanner (System.in);
			int aA, aN, r, i = 1;
			
			while (i <= 6) {
			System.out.print("Digite seu ano atual");
			aA = ler.nextInt();
			System.out.print("Digite o seu  de nascimento");
			aN = ler.nextInt();
			r = aA - aN; 
			
			
			if (r >= 18) {
			System.out.println("Voce é maior de idade");
			} else {
			System.out.println("Voce é menor de idade");
			}
			ler.close();
			i ++;
		}
		}
	}




