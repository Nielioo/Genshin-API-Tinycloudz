part of "views.dart";

class ViewsWeapon extends StatefulWidget {
  const ViewsWeapon({Key? key}) : super(key: key);

  @override
  _ViewsWeaponState createState() => _ViewsWeaponState();
}

class _ViewsWeaponState extends State<ViewsWeapon> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
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
            Container(
              width: double.infinity,
              padding: EdgeInsets.fromLTRB(16, 0, 16, 0),
              child: Text(
                "Weapons",
                style: TextStyle(
                    fontSize: 22,
                    fontWeight: FontWeight.bold,
                    color: Colors.white),
              ),
            ),
            Container(
              width: double.infinity,
              padding: EdgeInsets.fromLTRB(0, 16, 0, 0),
              child: Column(
                children: [
                  Row(
                    mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                    children: [
                      Container(
                        width: 190,
                        height: 50,
                        color: Colors.white,
                      ),
                      Container(
                        width: 190,
                        height: 50,
                        color: Colors.white,
                      ),
                    ],
                  ),
                  SizedBox(
                    height: 12,
                  ),
                  Row(
                    mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                    children: [
                      Container(
                        width: 190,
                        height: 50,
                        color: Colors.white,
                      ),
                      Container(
                        width: 190,
                        height: 50,
                        color: Colors.white,
                      ),
                    ],
                  ),
                  SizedBox(
                    height: 16,
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
