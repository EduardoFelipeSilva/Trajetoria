import java.util.Scanner; 
public class ProgramaFahrenheit {
    public static void main(String[] args) {
        Scanner ler = new Scanner (System.in); 
        double c,f; 
        
        String celsius; 
        System.out.println ("Digite o valor de celsius:");
        c = ler.nextDouble();
        
        f = c*1.8+32; 
        
        System.out.println("A conversão de celsius em Fahrenheit é" +f);
        ler.close();
    }
    
}


