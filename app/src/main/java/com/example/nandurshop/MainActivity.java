package com.example.nandurshop;

import android.content.Intent;
import android.graphics.Bitmap;
import android.provider.MediaStore;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity implements View.OnClickListener{
    Button btnCameraForm, btnLogin, btnBottomNav;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnCameraForm = (Button) findViewById(R.id.btnCameraForm);
        btnLogin = (Button) findViewById(R.id.btnLogin);
        btnBottomNav = (Button) findViewById(R.id.btnBottomNav);

        btnBottomNav.setOnClickListener(this);
        btnCameraForm.setOnClickListener(this);
        btnLogin.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        Intent intent;
        switch (v.getId()){
            case R.id.btnCameraForm:
                intent = new Intent(this,CameraFormActivity.class);
                startActivity(intent);
                break;
            case R.id.btnBottomNav:
                intent = new Intent(this,Main2Activity.class);
                startActivity(intent);
                break;
        }
    }
}
