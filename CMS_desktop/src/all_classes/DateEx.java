
package all_classes;

public class DateEx {
    public static boolean check(int f1a,int f1b,int f1c,String s2)
    {
        String f2[]=s2.split("-");
        int f2a=Integer.parseInt(f2[0]);
        int f2b=Integer.parseInt(f2[1]);
        int f2c=Integer.parseInt(f2[2]);
        int a=f1a-f2a; 
        int b=f1b-f2b;
        int c=f1c-f2c;
        if(a>0 || b>0 || c>0)
            return true;
        else
         return false;
    }
}