package com.example.nandurshop.Adapter;

import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

//import com.example.nandurshop.activities;

import com.example.nandurshop.Model.Commodity;
import com.example.nandurshop.R;
import com.example.nandurshop.activities.EditCommodityActivity;

import java.util.List;

/**
 * Created by root on 2/3/17.
 */

public class CommodityAdapter extends RecyclerView.Adapter<CommodityAdapter.MyViewHolder>{
    List<Commodity> commodities;

    public CommodityAdapter(List <Commodity> KontakList) {
        commodities = KontakList;
    }

    @Override
    public MyViewHolder onCreateViewHolder (ViewGroup parent,int viewType){
        View mView = LayoutInflater.from(parent.getContext()).inflate(R.layout.commodity_list, parent, false);
        MyViewHolder mViewHolder = new MyViewHolder(mView);
        return mViewHolder;
    }

    @Override
    public void onBindViewHolder (MyViewHolder holder,final int position){
        holder.mTextViewId.setText("Variety Id = " + commodities.get(position).getVarietyId());
        holder.mTextViewNama.setText("Nama = " + commodities.get(position).getName());
        holder.mTextViewNomor.setText("Image = " + commodities.get(position).getImageUrl());
        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent mIntent = new Intent(view.getContext(), EditCommodityActivity.class);
                mIntent.putExtra("Nama", commodities.get(position).getName());
                mIntent.putExtra("Planted at", commodities.get(position).getPlantedAt());
                mIntent.putExtra("Variety Id", commodities.get(position).getVarietyId());
                view.getContext().startActivity(mIntent);
            }
        });
    }

    @Override
    public int getItemCount () {
        return commodities.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView mTextViewId, mTextViewNama, mTextViewNomor;

        public MyViewHolder(View itemView) {
            super(itemView);
            mTextViewId = (TextView) itemView.findViewById(R.id.name);
            mTextViewNama = (TextView) itemView.findViewById(R.id.planted_at);
            mTextViewNomor = (TextView) itemView.findViewById(R.id.variety_id);
        }
    }
}