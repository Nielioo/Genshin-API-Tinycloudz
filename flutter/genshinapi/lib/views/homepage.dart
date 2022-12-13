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
      body: Container(
        width: double.infinity,
        height: double.infinity,
        decoration: BoxDecoration(
            gradient: LinearGradient(
          begin: Alignment.topLeft,
          end: Alignment.bottomRight,
          colors: [Colors.deepPurple, Colors.purpleAccent],
        )),
        child: Column(
          children: [
            SizedBox(
              height: 60,
            ),
            Container(
              width: double.infinity,
              padding: EdgeInsets.fromLTRB(16, 0, 16, 0),
              child: Column(
                children: [
                  Text(
                    "Current Banner",
                    style: TextStyle(
                        fontSize: 22,
                        fontWeight: FontWeight.bold,
                        color: Colors.white),
                  ),
                  Image.asset("assets/images/homeBanner.jpg")
                ],
              ),
              
            ),
            Container(
              width: double.infinity,
              padding: EdgeInsets.fromLTRB(16, 32, 16, 0),
              child: Text(
                "Today's Domain",
                style: TextStyle(
                    fontSize: 22,
                    fontWeight: FontWeight.bold,
                    color: Colors.white),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
