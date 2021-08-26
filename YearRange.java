package com.company;

public class YearRange {
    private int FirstYear;
    private int SecondYear;
    private int FirstDivisor;
    private int SecondDivisor;
    private int RangeType;

    public YearRange(int FirstDivisor, int SecondDivisor) {
        this.FirstDivisor = FirstDivisor;
        this.SecondDivisor = SecondDivisor;
    }

    public int getFirstYear() {
        return FirstYear;
    }

    public int getSecondYear() {
        return SecondYear;
    }
    

    public int getFirstDivisor() {
        return FirstDivisor;
    }

    public int getSecondDivisor() {
        return SecondDivisor;
    }

    public void setRangeType(int RangeType){
        this.RangeType = RangeType;
    }

    public void printYears(){
        System.out.println("FirstDivisor: "+FirstDivisor);
        System.out.println("SecondDivisor: " +SecondDivisor);
        System.out.println("Years: " +FirstYear);
    }



}
