part of "views.dart";

class Homepage extends StatefulWidget {
  const Homepage({Key? key}) : super(key: key);

  @override
  _HomepageState createState() => _HomepageState();
}

class _HomepageState extends State<Homepage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SingleChildScrollView(
        child: Container(
          child: Container(
            width: double.infinity,
            decoration: BoxDecoration(
                gradient: LinearGradient(
              begin: Alignment.topLeft,
              end: Alignment.bottomRight,
              colors: [MyColor().darkBlue, MyColor().darkPurple],
            )),
            child: Column(
              mainAxisSize: MainAxisSize.max,
              children: [
                SizedBox(
                  height: 72,
                ),

                //Current Banner -----------------------------------------------------
                Container(
                  width: double.infinity,
                  padding: EdgeInsets.fromLTRB(16, 0, 16, 0),
                  child: Text(
                    "Current Banner",
                    style: TextStyle(
                        fontSize: 22,
                        fontWeight: FontWeight.bold,
                        color: Colors.white),
                  ),
                ),
                Container(
                  padding: EdgeInsets.fromLTRB(16, 16, 16, 0),
                  child: Image.asset(
                    "assets/images/homeBanner.jpg",
                  ),
                ),

                // Today's Domain ------------------------------------------------------
                Container(
                  width: double.infinity,
                  padding: EdgeInsets.fromLTRB(16, 48, 16, 0),
                  child: Text(
                    "Today's Domain",
                    style: TextStyle(
                        fontSize: 22,
                        fontWeight: FontWeight.bold,
                        color: Colors.white),
                  ),
                ),
                Container(
                  padding: EdgeInsets.fromLTRB(0, 16, 0, 0),
                  child: Column(
                    children: [
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                        children: [
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                        ],
                      ),
                      SizedBox(
                        height: 16,
                      ),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                        children: [
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                        ],
                      ),
                      SizedBox(
                        height: 16,
                      ),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                        children: [
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 100,
                            height: 100,
                            color: Colors.white,
                          ),
                        ],
                      ),
                    ],
                  ),
                ),

                // Favorite Characters ------------------------------------------------------
                Container(
                  width: double.infinity,
                  padding: EdgeInsets.fromLTRB(16, 48, 16, 0),
                  child: Text(
                    "Favorite Characters",
                    style: TextStyle(
                        fontSize: 22,
                        fontWeight: FontWeight.bold,
                        color: Colors.white),
                  ),
                ),
                Container(
                  padding: EdgeInsets.fromLTRB(0, 16, 0, 0),
                  child: Column(
                    children: [
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                        children: [
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                        ],
                      ),
                      SizedBox(
                        height: 16,
                      ),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                        children: [
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                        ],
                      ),
                    ],
                  ),
                ),

                // Favorite Characters ------------------------------------------------------
                Container(
                  width: double.infinity,
                  padding: EdgeInsets.fromLTRB(16, 48, 16, 0),
                  child: Text(
                    "Favorite Weapons",
                    style: TextStyle(
                        fontSize: 22,
                        fontWeight: FontWeight.bold,
                        color: Colors.white),
                  ),
                ),
                Container(
                  padding: EdgeInsets.fromLTRB(0, 16, 0, 0),
                  child: Column(
                    children: [
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                        children: [
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                        ],
                      ),
                      SizedBox(
                        height: 16,
                      ),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                        children: [
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                          Container(
                            width: 80,
                            height: 100,
                            color: Colors.white,
                          ),
                        ],
                      ),
                    ],
                  ),
                ),

                // Navbar --------------------------------------------------------------
                SizedBox(
                  height: 32,
                ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
