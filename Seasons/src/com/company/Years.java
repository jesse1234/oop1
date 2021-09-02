package com.company;

public class Years {
    private int yearOne;
    private int yearTwo;
    private int rangeType;
    private int firstDivisor;
    private int secondDivisor;

    public Years(int yearOne, int yearTwo){
        this.yearOne = yearOne;
        this.yearTwo = yearTwo;
    }

    public int getYearOne() {
        return yearOne;
    }

    public void setYearOne(int yearOne) {
        this.yearOne = yearOne;
    }

    public int getYearTwo() {
        return yearTwo;
    }

    public void setYearTwo(int yearTwo) {
        this.yearTwo = yearTwo;
    }

    public int getRangeType() {
        return rangeType;
    }

    public void setRangeType(int yearOne) {
        this.rangeType = yearOne;
    }

    public int getFirstDivisor() {
        return firstDivisor;
    }

    public void setFirstDivisor(int firstYear) {
        firstDivisor = firstYear;
    }

    public int getSecondDivisor() {
        return secondDivisor;
    }

    public void setSecondDivisor(int secondYear) {
        this.secondDivisor = secondYear;
    }

    public void printYears(){
        while(yearOne <= yearTwo){
            yearOne++;
            if (yearOne % firstDivisor == 0 && yearOne % secondDivisor == 0)
                System.out.println(yearOne);
        }
    }
}
