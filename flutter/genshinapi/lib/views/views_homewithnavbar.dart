part of "views.dart";

class ViewsHomewithnavbar extends StatefulWidget {
  const ViewsHomewithnavbar({Key? key}) : super(key: key);

  @override
  _ViewsHomewithnavbarState createState() => _ViewsHomewithnavbarState();
}

class _ViewsHomewithnavbarState extends State<ViewsHomewithnavbar> {
  int _selectedIndex = 0;
  static List<Widget> _widgetOption = <Widget>[
    Homepage(),
    ViewsCharacters(),
    ViewsWeapon(),
    ViewsArtifact(),
    ViewsMap()
  ];

  void _onItemTapped(int index) {
    setState(() {
      _selectedIndex = index;
    });
  }

  @override
  void initState() {
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Stack(
        children: [
          Center(
            child: _widgetOption.elementAt(_selectedIndex),
          )
        ],
      ),
      bottomNavigationBar: BottomNavigationBar(
        type: BottomNavigationBarType.fixed,
        items: [
          const BottomNavigationBarItem(icon: Icon(Icons.dataset), label: "Home"),
          const BottomNavigationBarItem(
              icon: Icon(Icons.person), label: "Characters"),
          const BottomNavigationBarItem(icon: Icon(Icons.shield), label: "Weapons"),
          const BottomNavigationBarItem(icon: Icon(Icons.diamond), label: "Artifacts"),
          const BottomNavigationBarItem(icon: Icon(Icons.map), label: "Map"),
        ],
        currentIndex: _selectedIndex,
        onTap: _onItemTapped,
      ),
      
    );
  }
}
