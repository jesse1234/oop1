package com.company;


import javax.swing.*;

public class Main {

    public static void main(String[] args) {
    Calculator calc = new Calculator();
        calc.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        calc.setSize(500,500);
        calc.setVisible(true);
    }
}