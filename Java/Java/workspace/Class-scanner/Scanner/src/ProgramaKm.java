import java.util.Scanner; 
public class ProgramaKm {
    public static void main(String[] args) {
        Scanner ler = new Scanner (System.in); 
        double metros, k; 
        
        String metros; 
        System.out.println("Digite os metros:");
        metros = ler.nextDouble();
        
        k = metros/100; 
        
        System.out.println("A conversão de metros para quilometros é:" +k);
        ler.close();
    }
}


