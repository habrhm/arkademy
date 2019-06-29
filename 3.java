public class Main
{
	public static void main(String[] args) {
		segitiga(7);
		segitiga(9);
		segitiga(13);
	}

public static void segitiga(int p){
	   String a = "";
	   int barisKe = 1;
	   int jarak = 0;
	   boolean beres = false;
	   for (int i = 0;i < p  ;i++ ){
	                a = a+"*";
	   } 
	           
       System.out.println(a);
	   
	   while (!beres){
	       barisKe++;
	       a = "";
	       for (int i = 0; i < barisKe-1; i++ ){
	           a = a+ " ";
	           
	       }
	       a = a + "*";
	       jarak = p - barisKe * 2;
	       if (a.length() > p/2 ){
	           beres = true;
	           
	       }else{

	       for (int i = 0; i < jarak; i++ ){
	           a = a+ " ";
	       }
	       
	       a = a + "*";
	       }
	       System.out.println(a);
	   }

    }
}
	   
