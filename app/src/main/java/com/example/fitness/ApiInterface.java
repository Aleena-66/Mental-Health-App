package com.example.fitness;



import com.example.fitness.model.LoginBase;
import com.example.fitness.model.Status;

import retrofit2.Call;

import retrofit2.http.GET;

import retrofit2.http.Query;

public interface ApiInterface {

   @GET("login.php")
    Call<LoginBase> userLogin(@Query("email") String username, @Query("password") String password);




    @GET("insert_user_reg.php")
    Call<Status> userRegistration(@Query("email") String email,
                                  @Query("gender") String gender,
                                  @Query("name") String name,@Query("age") String age,
                                  @Query("password") String password);



}


