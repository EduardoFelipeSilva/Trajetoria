import java.util.Scanner;
public class Exercicio1 {
			public static void main (String []args) {
				Scanner ler = new Scanner (System.in);
				int[][]a = new int [3] [3];
				
				System.out.print("Digite o Nº de sua Matriz: ");
				
				for (int i=0; i <=2; i++) {
					for (int j=0; j<=2; j++) {
						a[i][j] = ler.nextInt();
						
					}
				}
				for (int i=0; i <=2; i++) {
					System.out.print("a[] = [");
					for (int j=0; j<=2; j++) {
						System.out.print(a[i][j]+ " ");
					}
					System.out.println("]");
				}
				
			ler.close();
				
			}
	}
