package com.company;

/* Group members
Sylvester Leting 138216
Jesse Kamau 137991
Amara Nyanzi 137656
 */
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.lang.Math.*;

public class Calculator extends JFrame implements ActionListener {
    private JLabel fOutput;
    private JTextField lblMessage;
    private JButton b1, b2, b3, b4, b5, b6, b7, b8, b9, b0, btnAdd, btnDifference, btnDivision, btnMultiply, btnDecimal, btnNeg, btnLog, btnLog10, btnSquare, btnCube, btnPower, btnSquareRoot, btnCubeRoot, btnDelete, btnFactorial, btnClear,
            btnSin, btnCos, btnTan, btnLeftBracket, btnRightBracket, btnFraction, btnExp, btnMod, btnSinh, btnCosh, btnTanh,btnPi, btnEqual;
    double num1, num2, check, f;

    public Calculator() {
        super("Scientific Calculator");
        JPanel message = new JPanel();
        JPanel buttons = new JPanel();
        message.setLayout(new FlowLayout());
        lblMessage = new JTextField(50);

       //BUTTONS AND LAYOUT
        buttons.setLayout(new GridLayout(8,8));
        b0=(new JButton("0"));
        b1 = (new JButton("1"));
        b2=(new JButton("2"));
        b3=(new JButton("3"));
        b4=(new JButton("4"));
        b5=(new JButton("5"));
        b6=(new JButton("6"));
        b7=(new JButton("7"));
        b8=(new JButton("8"));
        b9=(new JButton("9"));//column 2
        btnAdd=(new JButton("+"));
        btnDifference=(new JButton("-"));
        btnDivision=(new JButton("÷"));
        btnMultiply=(new JButton("x"));
        btnMod=(new JButton("%"));
        btnDecimal=(new JButton("."));
        btnNeg=(new JButton("+/-"));
        btnCos=(new JButton("Cos"));
        btnSin=(new JButton("Sin"));//column3
        btnTan=(new JButton("Tan"));
        btnCosh=(new JButton("Cosh"));
        btnSinh=(new JButton("Sinh"));
        btnTanh=(new JButton("Tanh"));
        btnSquare=(new JButton("x^2"));
        btnCube=(new JButton("x^3"));
        btnPower=(new JButton("x^y"));
        btnPi=(new JButton("π"));
        btnLog=(new JButton("Log"));//column 4
        btnLog10=(new JButton("Log10"));
        btnExp=(new JButton("e"));
        btnFactorial=(new JButton("!"));
        btnSquareRoot=(new JButton("√"));
        btnCubeRoot=(new JButton("3√"));
        btnDelete=(new JButton("DE"));
        btnClear=(new JButton("C"));
        btnFraction=(new JButton("1/x"));
        btnLeftBracket=(new JButton("("));
        btnRightBracket=(new JButton(")"));
        btnEqual=(new JButton("="));


        buttons.setLayout(new GridLayout(8,8));
        message.add(lblMessage);
        buttons.add(btnSquareRoot);
        buttons.add(btnCubeRoot);
        buttons.add(btnSquare);
        buttons.add(btnCube);
        buttons.add(btnDelete);//row1
        buttons.add(btnPower);
        buttons.add(btnLog10);
        buttons.add(btnLog);
        buttons.add(btnPi);
        buttons.add(btnNeg);//row2
        buttons.add(btnFraction);
        buttons.add(btnLeftBracket);
        buttons.add(btnRightBracket);
        buttons.add(btnFactorial);
        buttons.add(btnTan);//row3
        buttons.add(btnCosh);
        buttons.add(btnSinh);
        buttons.add(btnTanh);
        buttons.add(btnCos);
        buttons.add(btnSin);//row4
        buttons.add(b9);
        buttons.add(b8);
        buttons.add(b7);
        buttons.add(btnMultiply);
        buttons.add(btnClear);//row5
        buttons.add(b6);
        buttons.add(b5);
        buttons.add(b4);
        buttons.add(btnAdd);//row6
        buttons.add(btnExp);
        buttons.add(b3);
        buttons.add(b2);
        buttons.add(b1);
        buttons.add(btnDivision);
        buttons.add(btnDifference);//row7
        buttons.add(btnDecimal);
        buttons.add(b0);
        buttons.add(btnEqual);

        setLayout(new BorderLayout());
        add("South",buttons);
        add("North",message);

        fOutput = new JLabel();
        add(fOutput);
        b1.addActionListener(this);
        b2.addActionListener(this);
        b3.addActionListener(this);
        b4.addActionListener(this);
        b5.addActionListener(this);
        b6.addActionListener(this);
        b7.addActionListener(this);
        b8.addActionListener(this);
        b9.addActionListener(this);
        b0.addActionListener(this);
        btnAdd.addActionListener(this);
        btnDifference.addActionListener(this);
        btnDivision.addActionListener(this);
        btnMultiply.addActionListener(this);
        btnMod.addActionListener(this);
        btnDecimal.addActionListener(this);
        btnNeg.addActionListener(this);
        btnClear.addActionListener(this);
        btnCos.addActionListener(this);
        btnSin.addActionListener(this);
        btnTan.addActionListener(this);
        btnSinh.addActionListener(this);
        btnCosh.addActionListener(this);
        btnTanh.addActionListener(this);
        btnSquare.addActionListener(this);
        btnPi.addActionListener(this);
        btnCube.addActionListener(this);
        btnPower.addActionListener(this);
        btnLog10.addActionListener(this);
        btnLog.addActionListener(this);
        btnExp.addActionListener(this);
        btnFactorial.addActionListener(this);
        btnSquareRoot.addActionListener(this);
        btnCubeRoot.addActionListener(this);
        btnDelete.addActionListener(this);
        btnFraction.addActionListener(this);
        btnLeftBracket.addActionListener(this);
        btnRightBracket.addActionListener(this);
        btnEqual.addActionListener(this);
    }
@Override
    public void actionPerformed(ActionEvent e) {
        String s, st;
        double x;

        if (e.getSource() == b1) {
            st = lblMessage.getText();
            s = st + "1";
            lblMessage.setText(s);
        }

        if (e.getSource() == b2) {
            st = lblMessage.getText();
            s = st + "2";
            lblMessage.setText(s);
        }

        if (e.getSource() == b3) {
            st = lblMessage.getText();
            s = st + "3";
            lblMessage.setText(s);
        }

        if (e.getSource() == b4) {
            st = lblMessage.getText();
            s = st + "4";
            lblMessage.setText(s);
        }

        if (e.getSource() == b5) {
            st = lblMessage.getText();
            s = st + "5";
            lblMessage.setText(s);
        }

        if (e.getSource() == b6) {
            st = lblMessage.getText();
            s = st + "6";
            lblMessage.setText(s);
        }

        if (e.getSource() == b7) {
            st = lblMessage.getText();
            s = st + "7";
            lblMessage.setText(s);
        }

        if (e.getSource() == b8) {
            st = lblMessage.getText();
            s = st + "8";
            lblMessage.setText(s);
        }

        if (e.getSource() == b9) {
            st = lblMessage.getText();
            s = st + "9";
            lblMessage.setText(s);
        }

        if (e.getSource() == b0) {
            st = lblMessage.getText();
            s = st + "0";
            lblMessage.setText(s);
        }

        if (e.getSource() == btnLeftBracket) {
            st = lblMessage.getText();
            s = st + "(";
            lblMessage.setText(s);
        }

        if (e.getSource() == btnRightBracket) {
            st = lblMessage.getText();
            s = st + ")";
            lblMessage.setText(s);
        }

        //ARITHMETIC OPERATIONS
        if (e.getSource() == btnAdd) {
            try {
                num1 = Double.parseDouble(lblMessage.getText());
            } catch (NumberFormatException f) {
                lblMessage.setText("Not valid");
                return;
            }
            s = "";
            lblMessage.setText(s);
            check = 1;
        }

        if (e.getSource() == btnDifference) {
            try {
                num1 = Double.parseDouble(lblMessage.getText());
            } catch (NumberFormatException f) {
                lblMessage.setText("Not valid");
                return;
            }
            s = "";
            lblMessage.setText(s);
            check = 2;
        }

        if (e.getSource() == btnDivision) {
            try {
                num1 = Double.parseDouble(lblMessage.getText());
            } catch (NumberFormatException f) {
                lblMessage.setText("Not valid");
                return;
            }
            s = "";
            lblMessage.setText(s);
            check = 3;
        }

        if (e.getSource() == btnMultiply) {
            try {
                num1 = Double.parseDouble(lblMessage.getText());
            } catch (NumberFormatException f) {
                lblMessage.setText("Not valid");
                return;
            }
            s = "";
            lblMessage.setText(s);
            check = 4;
        }

        //MODULUS
        if (e.getSource() == btnMod) {
            try {
                num1 = Double.parseDouble(lblMessage.getText());
            } catch (NumberFormatException f) {
                lblMessage.setText("Not valid");
                return;
            }
            s = "";
            lblMessage.setText(s);
            check = 5;
        }

        //NEGATIVE
        if (e.getSource() == btnNeg) {
            st = lblMessage.getText();
            s ="-"+st;
            lblMessage.setText(s);
        }

        //DECIMAL POINT
        if (e.getSource() == btnDecimal) {
            st = lblMessage.getText();
            s = st + ".";
            lblMessage.setText(s);
        }

        //TRIGONOMETRIC FUNCTIONS
        if (e.getSource() == btnCos) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Not valid");
                return;
            }
            x = Math.cos(num1);
            lblMessage.setText(String.valueOf(x));

        }

        if (e.getSource() == btnSin) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Not Valid");
                return;
            }
            x = Math.sin(num1);
            lblMessage.setText(String.valueOf(x));;

        }

        if (e.getSource() == btnTan) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.tan(num1);
            lblMessage.setText(String.valueOf(x));

        }

        if (e.getSource() == btnCosh) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.cosh(num1);
            lblMessage.setText(String.valueOf(x));
        }

        if (e.getSource() == btnTanh) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.tanh(num1);
            lblMessage.setText(String.valueOf(x));

        }

        if (e.getSource() == btnSinh) {
            try {
                num1 = Double.parseDouble(lblMessage.getText());
            } catch (NumberFormatException f) {
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.sinh(num1);
            lblMessage.setText(String.valueOf(x));

        }

        //ROOTS
        if (e.getSource() == btnSquareRoot) {
            try {
                num1 = Double.parseDouble(lblMessage.getText());
            } catch (NumberFormatException f) {
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.sqrt(num1);
            lblMessage.setText(String.valueOf(x));
        }

        if (e.getSource() == btnCubeRoot) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.cbrt(num1);
            lblMessage.setText(String.valueOf(x));

        }

        //POWERS
        if (e.getSource() == btnPower) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            s = "";
            lblMessage.setText(s);
            check = 6;

        }

        if (e.getSource() == btnSquare) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = (num1*num1);
            lblMessage.setText(String.valueOf(x));
        }

        if (e.getSource() == btnCube) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = (num1*num1*num1);
            lblMessage.setText(String.valueOf(x));
        }

        //CONSTANTS
        if (e.getSource() == btnExp) {
            try{
                lblMessage.getText();
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.E;
            lblMessage.setText(String.valueOf(x));

        }

        if (e.getSource() == btnPi) {
            try{
                lblMessage.getText();
            }catch(NumberFormatException f){
                lblMessage.setText("Not valid");
                return;
            }
            x = Math.PI;
            lblMessage.setText(String.valueOf(x));
        }

        //FACTORIAL
        if (e.getSource() == btnFactorial) {
                num1 = Double.parseDouble(lblMessage.getText());
                long factorial=1;
                int i = 1;
                while(i <= num1)
                {
                    factorial *= i;
                    i++;
                }
            x = factorial;
            lblMessage.setText(String.valueOf(x));
        }

        //LOGARITHMS
        if (e.getSource() == btnLog10) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Not valid");
                return;
            }
            x = Math.log10(num1);
            lblMessage.setText(String.valueOf(x));
        }

        if (e.getSource() == btnLog) {
            try{
                num1 = Double.parseDouble(lblMessage.getText());
            }catch(NumberFormatException f){
                lblMessage.setText("Invalid Format");
                return;
            }
            x = Math.log(num1);
            lblMessage.setText(String.valueOf(x));
        }

        //FRACTION
        if (e.getSource() == btnFraction) {
        try{
            num1 = Double.parseDouble(lblMessage.getText());
        }catch(NumberFormatException f){
            lblMessage.setText("Invalid Format");
            return;
        }
        s = "1/"+ num1;
        lblMessage.setText(s);

    }

        if(e.getSource()==btnDelete){
            st=lblMessage.getText();
            try{
                s=st.substring(0, st.length()-1);
            }catch(StringIndexOutOfBoundsException f){return;}
            lblMessage.setText(s);
        }

        if (e.getSource() == btnEqual) {
            try {
                num2 = Double.parseDouble(lblMessage.getText());
            } catch (Exception f) {
                lblMessage.setText("Please enter a number");
                return;
            }
            if (check == 1)
                f = num1 + num2;
            if (check == 2)
                f = num1 - num2;
            if (check == 3)
                f = num1 / num2;
            if (check == 4)
                f = num1 * num2;
            if (check == 5)
                f = num1 % num2;
            if (check == 6)
                f = Math.pow(num1,num2);

            lblMessage.setText(String.valueOf(f));
        }

        if (e.getSource() == btnClear) {
            num1 = 0;
            num2 = 0;
            check = 0;
            f = 0;
            s = "";
            lblMessage.setText(s);
        }
    }
}