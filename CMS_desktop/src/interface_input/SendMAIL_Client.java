/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package interface_input;

import all_classes.javamail;
import interface_output.*;
import java.awt.Cursor;
import javax.swing.JOptionPane;

public class SendMAIL_Client extends javax.swing.JDialog {
    int mX,mY;
    String EMAIL="";
    public SendMAIL_Client(java.awt.Frame parent, boolean modal,String Email) {
        super(parent, modal);
        initComponents();    
        to.setText(Email);
        EMAIL=Email;
        move2.setCursor(new Cursor(Cursor.MOVE_CURSOR));
        exit.setCursor(new Cursor(Cursor.HAND_CURSOR));
        send.setCursor(new Cursor(Cursor.HAND_CURSOR));
        reset.setCursor(new Cursor(Cursor.HAND_CURSOR));
    }
    @SuppressWarnings("unchecked")
        // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
        private void initComponents() {

                exit = new javax.swing.JLabel();
                send = new javax.swing.JLabel();
                reset = new javax.swing.JLabel();
                to = new javax.swing.JLabel();
                sub = new javax.swing.JTextField();
                jScrollPane1 = new javax.swing.JScrollPane();
                msg = new javax.swing.JTextArea();
                move2 = new javax.swing.JLabel();
                move = new javax.swing.JLabel();

                setUndecorated(true);
                addWindowListener(new java.awt.event.WindowAdapter() {
                        public void windowClosing(java.awt.event.WindowEvent evt) {
                                closeDialog(evt);
                        }
                });
                getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

                exit.addMouseListener(new java.awt.event.MouseAdapter() {
                        public void mouseClicked(java.awt.event.MouseEvent evt) {
                                exitMouseClicked(evt);
                        }
                });
                getContentPane().add(exit, new org.netbeans.lib.awtextra.AbsoluteConstraints(450, 0, 30, 27));

                send.addMouseListener(new java.awt.event.MouseAdapter() {
                        public void mouseClicked(java.awt.event.MouseEvent evt) {
                                sendMouseClicked(evt);
                        }
                });
                getContentPane().add(send, new org.netbeans.lib.awtextra.AbsoluteConstraints(260, 520, 170, 40));

                reset.addMouseListener(new java.awt.event.MouseAdapter() {
                        public void mouseClicked(java.awt.event.MouseEvent evt) {
                                resetMouseClicked(evt);
                        }
                });
                getContentPane().add(reset, new org.netbeans.lib.awtextra.AbsoluteConstraints(60, 520, 170, 40));

                to.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
                to.setToolTipText("You can't edit !");
                getContentPane().add(to, new org.netbeans.lib.awtextra.AbsoluteConstraints(70, 80, 400, 30));

                sub.setBackground(new java.awt.Color(46, 46, 89));
                sub.setFont(new java.awt.Font("Tahoma", 1, 12)); // NOI18N
                sub.setForeground(new java.awt.Color(51, 255, 51));
                sub.setBorder(javax.swing.BorderFactory.createBevelBorder(javax.swing.border.BevelBorder.RAISED));
                getContentPane().add(sub, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 132, 384, 35));

                jScrollPane1.setBackground(new java.awt.Color(46, 46, 89));
                jScrollPane1.setBorder(javax.swing.BorderFactory.createBevelBorder(javax.swing.border.BevelBorder.RAISED));

                msg.setBackground(new java.awt.Color(46, 46, 89));
                msg.setColumns(20);
                msg.setForeground(new java.awt.Color(51, 255, 0));
                msg.setRows(5);
                jScrollPane1.setViewportView(msg);

                getContentPane().add(jScrollPane1, new org.netbeans.lib.awtextra.AbsoluteConstraints(12, 222, 460, 280));
                getContentPane().add(move2, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 450, 30));

                move.setIcon(new javax.swing.ImageIcon(getClass().getResource("/img/sendmail_1.png"))); // NOI18N
                move.addMouseMotionListener(new java.awt.event.MouseMotionAdapter() {
                        public void mouseDragged(java.awt.event.MouseEvent evt) {
                                moveMouseDragged(evt);
                        }
                });
                move.addMouseListener(new java.awt.event.MouseAdapter() {
                        public void mousePressed(java.awt.event.MouseEvent evt) {
                                moveMousePressed(evt);
                        }
                });
                getContentPane().add(move, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 480, 570));

                pack();
                setLocationRelativeTo(null);
        }// </editor-fold>//GEN-END:initComponents

    private void closeDialog(java.awt.event.WindowEvent evt) {//GEN-FIRST:event_closeDialog

    }//GEN-LAST:event_closeDialog

    private void sendMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_sendMouseClicked
        String MSG=msg.getText();
        String SUB=sub.getText();
        if(SUB.equalsIgnoreCase("")){
            JOptionPane.showMessageDialog(null, "Write valid Subject!!!");
        }
        else if(MSG.equalsIgnoreCase(""))
        {
            JOptionPane.showMessageDialog(null, "Write valid Message!!!");
        }
        else{
            if(javamail.Sendmail(EMAIL,SUB,MSG)){
                JOptionPane.showMessageDialog(null, "Message send successfully!!!");
            }
            else{
                JOptionPane.showMessageDialog(null, "Some technical problems to send email!");
            }
        }
    }//GEN-LAST:event_sendMouseClicked

    private void resetMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_resetMouseClicked
        // TODO add your handling code here:
        reset();
    }//GEN-LAST:event_resetMouseClicked

    private void exitMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_exitMouseClicked
        // TODO add your handling code here:
        this.dispose();
    }//GEN-LAST:event_exitMouseClicked

    private void moveMouseDragged(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_moveMouseDragged
        // TODO add your handling code here:
        int x=evt.getXOnScreen();
        int y=evt.getYOnScreen();
        this.setLocation(x-mX, y-mY);
    }//GEN-LAST:event_moveMouseDragged

    private void moveMousePressed(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_moveMousePressed
        // TODO add your handling code here:
        mX=evt.getX();
        mY=evt.getY();
    }//GEN-LAST:event_moveMousePressed
    

    /**
     * @param args the command line arguments
     */
//    public static void main(String args[]) {
//        /* Set the Nimbus look and feel */
//        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
//        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
//         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
//         */
//        try {
//            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
//                if ("Nimbus".equals(info.getName())) {
//                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
//                    break;
//                }
//            }
//        } catch (ClassNotFoundException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        } catch (InstantiationException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        } catch (IllegalAccessException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
//            java.util.logging.Logger.getLogger(DetailsBills.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
//        }
//        //</editor-fold>
//
//        /* Create and display the dialog */
//        java.awt.EventQueue.invokeLater(new Runnable() {
//            public void run() {
//                DetailsBills dialog = new DetailsBills(new javax.swing.JFrame(), true);
//                dialog.addWindowListener(new java.awt.event.WindowAdapter() {
//                    @Override
//                    public void windowClosing(java.awt.event.WindowEvent e) {
//                        System.exit(0);
//                    }
//                });
//                dialog.setVisible(true);
//            }
//        });
//    }

        // Variables declaration - do not modify//GEN-BEGIN:variables
        private javax.swing.JLabel exit;
        private javax.swing.JScrollPane jScrollPane1;
        private javax.swing.JLabel move;
        private javax.swing.JLabel move2;
        private javax.swing.JTextArea msg;
        private javax.swing.JLabel reset;
        private javax.swing.JLabel send;
        private javax.swing.JTextField sub;
        private javax.swing.JLabel to;
        // End of variables declaration//GEN-END:variables

    private void reset() {
    msg.setText(null);
    sub.setText(null);
    }

}
