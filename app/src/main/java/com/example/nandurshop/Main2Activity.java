package com.example.nandurshop;

import android.net.Uri;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.v4.app.Fragment;
import android.support.v7.app.AppCompatActivity;
import android.view.MenuItem;
import android.widget.TextView;
import android.widget.Toast;

public class Main2Activity extends AppCompatActivity implements BottomNavigationView.OnNavigationItemSelectedListener,
        DashboardFragment.OnFragmentInteractionListener,
        PlantsFragment.OnFragmentInteractionListener{

    private TextView mTextMessage;

    private BottomNavigationView.OnNavigationItemSelectedListener mOnNavigationItemSelectedListener
            = new BottomNavigationView.OnNavigationItemSelectedListener() {

        @Override
        public boolean onNavigationItemSelected(@NonNull MenuItem item) {
            Fragment fragment=null;
            switch (item.getItemId()) {
                case R.id.navigation_home:
                    fragment = new DashboardFragment();
                    break;
                case R.id.navigation_plants:
                    fragment = new PlantsFragment();
                    break;
                case R.id.navigation_store:
                    Toast.makeText(Main2Activity.this, "Notification", Toast.LENGTH_SHORT).show();
//                    mTextMessage.setText(R.string.title_notifications);
                    return true;
            }
            return loadFragment(fragment);
        }
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        Toast.makeText(this, "Test", Toast.LENGTH_SHORT).show();
        loadFragment(new DashboardFragment());
        BottomNavigationView navigation = (BottomNavigationView) findViewById(R.id.navigation);
        navigation.setOnNavigationItemSelectedListener(mOnNavigationItemSelectedListener);
    }

    private boolean loadFragment(Fragment fragment){
        if (fragment!=null){
            getSupportFragmentManager()
                    .beginTransaction()
                    .setCustomAnimations(R.anim.enter,R.anim.exit,R.anim.pop_enter,R.anim.pop_exit)
                    .replace(R.id.fragment_container,fragment)
                    .commit();
            return true;
        }
        return false;
    }

    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem menuItem) {
        Fragment fragment = null;

        switch (menuItem.getItemId()) {
            case R.id.navigation_home:
                fragment = new DashboardFragment();
                break;
            case R.id.navigation_plants:
                Toast.makeText(Main2Activity.this, "Plants", Toast.LENGTH_SHORT).show();
//                    mTextMessage.setText(R.string.title_dashboard);
                return true;
            case R.id.navigation_store:
                Toast.makeText(Main2Activity.this, "Notification", Toast.LENGTH_SHORT).show();
//                    mTextMessage.setText(R.string.title_notifications);
                return true;
        }
        return loadFragment(fragment);
    }

    @Override
    public void onFragmentInteraction(Uri uri) {

    }
}