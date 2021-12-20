package com.example.fitness.model;

import com.google.gson.annotations.SerializedName;

public class LoginItem {

	@SerializedName("number")
	private String number;

	@SerializedName("password")
	private String password;

	@SerializedName("name")
	private String name;

	@SerializedName("weight")
	private String weight;

	@SerializedName("email")
	private String email;

	@SerializedName("age")
	private String age;


	@SerializedName("height")
	private String height;

	public void setNumber(String number) {
		this.number = number;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public void setName(String name) {
		this.name = name;
	}

	public void setWeight(String weight) {
		this.weight = weight;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public void setAge(String age) {
		this.age = age;
	}

	public void setHeight(String height) {
		this.height = height;
	}

	public String getNumber(){
		return number;
	}

	public String getPassword(){
		return password;
	}

	public String getName(){
		return name;
	}

	public String getWeight(){
		return weight;
	}

	public String getEmail(){
		return email;
	}

	public String getAge(){
		return age;
	}

	public String getHeight(){
		return height;
	}
}