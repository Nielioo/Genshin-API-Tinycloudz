part of "views.dart";

class ViewsCharacters extends StatefulWidget {
  const ViewsCharacters({Key? key}) : super(key: key);

  @override
  _ViewsCharactersState createState() => _ViewsCharactersState();
}

class _ViewsCharactersState extends State<ViewsCharacters> {
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
                "Characters",
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
          ],
        ),
      ),
    );
  }
}
