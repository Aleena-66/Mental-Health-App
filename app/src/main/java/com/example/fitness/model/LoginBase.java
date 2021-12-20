package com.example.fitness.model;

import java.util.List;
import com.google.gson.annotations.SerializedName;

public class LoginBase{

	@SerializedName("data")
	private List<LoginItem> data;

	@SerializedName("success")
	private boolean success;

	public List<LoginItem> getData(){
		return data;
	}

	public boolean isSuccess(){
		return success;
	}

	public void setData(List<LoginItem> data) {
		this.data = data;
	}

	public void setSuccess(boolean success) {
		this.success = success;
	}
}