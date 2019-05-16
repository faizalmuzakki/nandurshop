package com.example.nandurshop.activities;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.telecom.Call;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.example.nandurshop.Interface.GetDataService;
import com.example.nandurshop.Model.RetrofitClientInstance;
import com.example.nandurshop.Model.User;
import com.example.nandurshop.R;

public class LoginActivity extends AppCompatActivity {

    public String email;
    public String password;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        TextView vEmail = (TextView) findViewById(R.id.etEmailLog);
        TextView vPassword = (TextView) findViewById(R.id.etPasswordLog);

        email = vEmail.getText().toString();
        password = vPassword.getText().toString();

        Button login = findViewById(R.id.btnLogin);
        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                attemptLogin();
            }
        });
    }

    public void goRegister(View v){
        Intent regIntent = new Intent(this, RegisterActivity.class);
        startActivity(regIntent);
    }

    private void attemptLogin(){
        GetDataService service = RetrofitClientInstance.getRetrofitInstance().create(GetDataService.class);
//        Call<User> call = service.login();
    }

}
