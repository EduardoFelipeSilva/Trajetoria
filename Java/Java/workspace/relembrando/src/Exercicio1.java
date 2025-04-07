import java.util.Scanner;
public class Exercicio1 {

	public static void main(String[] args) {
		
		        Scanner in = new Scanner (System.in); 
		        
		        Double base, altura, area, perimetro;  
		        
		        System.out.println("Digite a base:");
		        base = in.nextDouble(); 
		        System.out.println("Digite a altura:");
		        altura = in.nextDouble(); 
		        
		        area = base*altura;
		        perimetro = 2*(base+altura); 
		       
		        System.out.println("A area é:"+area);
		        System.out.println("O perimetro é:"+perimetro);
		        in.close();
			    }

}
