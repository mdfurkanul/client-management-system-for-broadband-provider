
package all_classes;

import java.io.File;
import javax.swing.JOptionPane;

public class fileOpen {
    public static void checker(String str)
    {
          try {
		if ((new File(str)).exists()) {
			Process p = Runtime.getRuntime().exec("rundll32 url.dll,FileProtocolHandler "+str);
			p.waitFor();
		} else {
			JOptionPane.showMessageDialog(null,"File is not exists");
		}
  	  } catch (Exception ex) {
		ex.printStackTrace();
	  }
    }
}
