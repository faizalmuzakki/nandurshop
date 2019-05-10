package com.example.nandurshop.activities;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

import com.example.nandurshop.R;

public class LoginActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

    }

    public void goRegister(View v){
        Intent regIntent = new Intent(this,RegisterActivity.class);
        startActivity(regIntent);
    }
}
