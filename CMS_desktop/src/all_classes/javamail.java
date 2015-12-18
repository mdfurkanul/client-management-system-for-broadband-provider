
package all_classes;

import java.util.Properties;
import javax.activation.DataHandler;
import javax.activation.DataSource;
import javax.activation.FileDataSource;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Multipart;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeBodyPart;
import javax.mail.internet.MimeMessage;
import javax.mail.internet.MimeMultipart;

public class javamail {
    public static boolean Sendmail(String email,String sub,String msg)
    {
         final String username = "mfi7391@gmail.com";
	 final String password = "mfislam7391";
         String frm = "mfi7391@gmail.com";
 
		Properties props = new Properties();
                props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.socketFactory.port", "465");
		props.put("mail.smtp.socketFactory.class",
				"javax.net.ssl.SSLSocketFactory");
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.port", "465");
 
		Session session = Session.getInstance(props,
		  new javax.mail.Authenticator() {
			protected PasswordAuthentication getPasswordAuthentication() {
				return new PasswordAuthentication(username, password);
			}
		  });
 
		try {
 
			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress(frm));
                        message.setRecipients(Message.RecipientType.TO,
				InternetAddress.parse(email));
			message.setSubject(sub);
			message.setText(msg);
			Transport.send(message);
                        return true;
		} catch (MessagingException e) {
                    System.out.print("error"+e);
                    return false;
		}
    }
    public static boolean SendmailM(String email,String sub,String msg)
    {
         final String username = "mfi7391@gmail.com";
	 final String password = "mfislam7391";
         String frm = "mfi7391@gmail.com";
 
		Properties props = new Properties();
                props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.socketFactory.port", "465");
		props.put("mail.smtp.socketFactory.class",
				"javax.net.ssl.SSLSocketFactory");
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.port", "465");
 
		Session session = Session.getInstance(props,
		  new javax.mail.Authenticator() {
			protected PasswordAuthentication getPasswordAuthentication() {
				return new PasswordAuthentication(username, password);
			}
		  });
 
		try {
 
			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress(frm));
                        message.addRecipients(Message.RecipientType.TO, 
                        InternetAddress.parse(email));
//			message.setRecipients(Message.RecipientType.TO,
//				InternetAddress.parse(email));
			message.setSubject(sub);
			message.setText(msg);
			Transport.send(message);
                        return true;
		} catch (MessagingException e) {
                    System.out.print("error"+e);
                    return false;
		}
    }
    public static boolean SendAmail(String email,String sub,String msg,String file_location)
    {
         final String username = "mfi7391@gmail.com";
	 final String password = "mfislam7391";
         String frm = "mfi7391@gmail.com";
 
		Properties props = new Properties();
                props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.socketFactory.port", "465");
		props.put("mail.smtp.socketFactory.class",
				"javax.net.ssl.SSLSocketFactory");
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.port", "465");
 
		Session session = Session.getInstance(props,
		  new javax.mail.Authenticator() {
			protected PasswordAuthentication getPasswordAuthentication() {
				return new PasswordAuthentication(username, password);
			}
		  });
 
		try {
 
			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress(frm));
			message.setRecipients(Message.RecipientType.TO,
				InternetAddress.parse(email));
			message.setSubject(sub);
			message.setText(msg);
                        MimeBodyPart messageBodyPart = new MimeBodyPart();
                        Multipart multipart = new MimeMultipart();
                        messageBodyPart = new MimeBodyPart();
                        String attachment = "Attach files";
                        DataSource source = new FileDataSource(file_location);
                        messageBodyPart.setDataHandler(new DataHandler(source));
			Transport.send(message);
                        return true;
		} catch (MessagingException e) {
                    System.out.print("error"+e);
                    return false;
		}
    }
}
