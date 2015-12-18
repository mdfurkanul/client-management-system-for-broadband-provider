
package all_classes;

import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class mobile {
    public static boolean checker_no(String str)
    {
         String patt ="[0-9]{10}$";
 Pattern p = Pattern.compile(patt);
 Matcher m = p.matcher(str);
 if(m.find()) 
  return false;
 else
 return true;
    }
    
    
    public static boolean checker_nid(String str)
    {
         String patt ="[0-9]{16}$";
 Pattern p = Pattern.compile(patt);
 Matcher m = p.matcher(str);
 if(m.find()) 
  return false;
 else
 return true;
    }
    
public static boolean checker_id(String str)
{
 String patt ="[0-9]{6}$";
 Pattern p = Pattern.compile(patt);
 Matcher m = p.matcher(str);
 if(m.find()) 
  return false;
 else
 return true;
    }
    
}
