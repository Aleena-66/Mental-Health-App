package com.example.fitness.utils;

import android.app.Activity;
import android.app.Service;
import android.content.Context;
import android.content.Intent;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.os.IBinder;
import android.telephony.SmsManager;
import android.util.Log;
import android.widget.Toast;

import com.example.fitness.HomeActivity;


public class ShakeService extends Service implements SensorEventListener {

    SensorManager senSensorManager;
    Sensor senAccelerometer;
    long lastUpdate = 0;
    float last_x, last_y, last_z;
    int SHAKE_THRESHOLD =2000;
    Activity activity;
    private static final String TAG = "ShakeService";
   GpsTrackers gpsTrackers;
    private final int REQ_CODE_SPEECH_INPUT = 100;
    public ShakeService() {

    }

    GlobalPreference mGlobalPreference;
    @Override
    public IBinder onBind(Intent intent) {
        // TODO: Return the communication channel to the service.
        throw new UnsupportedOperationException("Not yet implemented");
    }
    @Override
    public void onCreate() {
        // TODO Auto-generated method stub

        Toast.makeText(getApplicationContext(),"service", Toast.LENGTH_LONG).show();
        senSensorManager = (SensorManager) getSystemService(Context.SENSOR_SERVICE);
        senAccelerometer = senSensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER);

        senSensorManager.registerListener(this, senAccelerometer, SensorManager.SENSOR_DELAY_NORMAL);
        mGlobalPreference=new GlobalPreference(this);
        gpsTrackers=new GpsTrackers(this);
    }
    @Override
    public void onSensorChanged(SensorEvent sensorEvent) {
        Sensor mySensor = sensorEvent.sensor;

        if (mySensor.getType() == Sensor.TYPE_ACCELEROMETER) {
            float x = sensorEvent.values[0];
            float y = sensorEvent.values[1];
            float z = sensorEvent.values[2];
            long curTime = System.currentTimeMillis();

            if ((curTime - lastUpdate) > 100) {
                long diffTime = (curTime - lastUpdate);
                lastUpdate = curTime;
                float speed = Math.abs(x + y + z - last_x - last_y - last_z)/ diffTime * 10000;
                Log.d(TAG, "onSensorChanged: "+speed);
                if (speed > SHAKE_THRESHOLD) {
                    startActivity(new Intent(getApplicationContext(), HomeActivity.class));
                    String message="Help me im at location latitude"+gpsTrackers.getLatitude()+" longtitude"+gpsTrackers.getLongitude();

//                    SmsManager smsManager = SmsManager.getDefault();
//                    smsManager.sendTextMessage(mGlobalPreference.getPhone(), null,message, null, null);
//
//                    Toast.makeText(this, "Message Has been Successfully Sent", Toast.LENGTH_SHORT).show();
                }

                }
            }
        }


    @Override
    public void onAccuracyChanged(Sensor sensor, int i) {

    }

}
