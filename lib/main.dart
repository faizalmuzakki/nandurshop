import 'package:flutter/material.dart';
import 'pages/home.dart';
import 'pages/store.dart';
import 'pages/tanduran.dart';
import 'pages/login.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Nandurshop',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: Login(title: 'Login Page'),
    );
  }
}

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  int _selectedIndex = 0;
  Home home;
  Store store;
  Tanduran tanduran;
  List<Widget> pages;
  Widget currentPage;

  @override
  void initState() {
    home = Home();
    store = Store();
    tanduran = Tanduran();
    currentPage = home;

    pages = [home,store,tanduran];
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: currentPage,
      floatingActionButton: FloatingActionButton(
        tooltip: 'Increment',
        child: Icon(Icons.add),
      ),
      bottomNavigationBar: BottomNavigationBar(
          currentIndex: _selectedIndex,
          onTap: (value){
            setState(() {
              _selectedIndex = value;
              currentPage = pages[value];
            });
          },
          items: const<BottomNavigationBarItem>[
            BottomNavigationBarItem(
              icon: Icon(Icons.home),
              title: Text('Home'),
            ),
            BottomNavigationBarItem(
              icon: Icon(Icons.store),
              title: Text('Toko'),
            ),
            BottomNavigationBarItem(
                icon: Icon(Icons.local_florist),
                title: Text('Tanduran')
            )
          ]),
    );
  }
}
