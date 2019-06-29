public class Main
{
	public static void main(String[] args) {
	    System.out.println(hitungPohon(2, 2));
		System.out.println(hitungPohon(1, 3));
		
	}

    public static double hitungPohon(double tinggiAwal, double tahun){
	        double tinggiAkhir = tinggiAwal;
	        for (int i = 1; i <= tahun; i++ ){
	            tinggiAkhir = ((tinggiAkhir +1) * 3 - 1.5) + ((tinggiAkhir +1) * 3 - 1.5)*15/100 ;
	            if (i % 2 == 0){
	                tinggiAkhir = tinggiAkhir/2;
	            } 
	       
	        } 
	         return tinggiAkhir;
	        
	    }

}
	   
