import java.util.Scanner;
public class Matriz {
		public static void main (String []args) {
			Scanner ler = new Scanner (System.in);
			int[][]a = new int [2] [4];
			
			for (int i=0; i <=1; i++) {
				for (int j=0; j<=3; j++) {
					a[i][j] = ler.nextInt();
					
				}
			}
			for (int i=0; i <=1; i++) {
				System.out.print("a[] = [");
				for (int j=0; j<=3; j++) {
					System.out.print(a[i][j]+ " ");
				}
				System.out.println("]");
			}
			
		}
}
