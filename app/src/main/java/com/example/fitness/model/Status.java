package com.example.fitness.model;

import com.google.gson.annotations.SerializedName;

public class Status {

    @SerializedName("success")
    private  String status;


    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }
}
