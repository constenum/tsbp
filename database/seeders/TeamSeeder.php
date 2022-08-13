<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    public function run() : Void
    {
        // MLB teams for testing
        DB::table('teams')->insert(['name' => 'Arizona Diamondbacks', 'short_name' => 'ARI Diamondbacks', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Atlanta Braves', 'short_name' => 'ATL Braves', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Baltimore Orioles', 'short_name' => 'ATL Braves', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Boston Red Sox', 'short_name' => 'BOS Red Sox', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Chicago Cubs', 'short_name' => 'CHI Cubs', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Chicago White Sox', 'short_name' => 'CHI White Sox', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Cincinnati Reds', 'short_name' => 'CIN Reds', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Cleveland Guardians', 'short_name' => 'CLE Guardians', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Colorado Rockies', 'short_name' => 'COL Rockies', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Detroit Tigers', 'short_name' => 'DET Tigers', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Houston Astros', 'short_name' => 'HOU Astros', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Kansas City Royals', 'short_name' => 'KC Royals', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Los Angeles Angels', 'short_name' => 'LA Angels', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Los Angeles Dodgers', 'short_name' => 'LA Dodgers', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Miami Marlins', 'short_name' => 'MIA Marlins', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Milwaukee Brewers', 'short_name' => 'MIL Brewers', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Minnesota Twins', 'short_name' => 'MIN Twins', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New York Mets', 'short_name' => 'NY Mets', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New York Yankees', 'short_name' => 'NY Yankees', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Oakland Athletics', 'short_name' => 'OAK Athletics', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Philadelphia Phillies', 'short_name' => 'PHI Phillies', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Pittsburgh Pirates', 'short_name' => 'PIT Pirates', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'San Diego Padres', 'short_name' => 'SD Padres', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'San Francisco Giants', 'short_name' => 'SF Giants', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Seattle Mariners', 'short_name' => 'SEA Mariners', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'St. Louis Cardinals', 'short_name' => 'STL Cardinals', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Tampa Bay Rays', 'short_name' => 'TB Rays', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Texas Rangers', 'short_name' => 'TEX Rangers', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Toronto Blue Jays', 'short_name' => 'TOR Blue Jays', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Washington Nationals', 'short_name' => 'WSH Nationals', 'league' => 'MLB', 'created_at' => NOW(), 'updated_at' => NOW(),]);

        // NCAA teams


        // NFL teams
        DB::table('teams')->insert(['name' => 'Arizona Cardinals', 'short_name' => 'ARI Cardinals', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Atlanta Falcons', 'short_name' => 'ATL Falcons', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Baltimore Ravens', 'short_name' => 'BAL Ravens', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Buffalo Bills', 'short_name' => 'BUF Bills', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Carolina Panthers', 'short_name' => 'CAR Panthers', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Chicago Bears', 'short_name' => 'CHI Bears', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Cincinnati Bengals', 'short_name' => 'CIN Bengals', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Cleveland Browns', 'short_name' => 'CLE Browns', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Dallas Cowboys', 'short_name' => 'DAL Cowboys', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Denver Broncos', 'short_name' => 'DEN Broncos', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Detroit Lions', 'short_name' => 'DET Lions', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Green Bay Packers', 'short_name' => 'GB Packers', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Houston Texans', 'short_name' => 'HOU Texans', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Indianapolis Colts', 'short_name' => 'IND Colts', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Jacksonville Jaguars', 'short_name' => 'JAX Jaguars', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Kansas City Chiefs', 'short_name' => 'KC Chiefs', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Las Vegas Raiders', 'short_name' => 'LV Raiders', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Los Angeles Chargers', 'short_name' => 'LA Chargers', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Los Angeles Rams', 'short_name' => 'LA Rams', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Miami Dolphins', 'short_name' => 'MIA Dolphins', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Minnesota Vikings', 'short_name' => 'MIN Vikings', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New England Patriots', 'short_name' => 'NE Patriots', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New Orleans Saints', 'short_name' => 'NO Saints', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New York Giants', 'short_name' => 'NY Giants', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New York Jets', 'short_name' => 'NY Jets', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Philadelphia Eagles', 'short_name' => 'PHI Eagles', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Pittsburgh Steelers', 'short_name' => 'PIT Steelers', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'San Francisco 49ers', 'short_name' => 'SF 49ers', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Seattle Seahawks', 'short_name' => 'SEA Seahawks', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Tampa Bay Buccaneers', 'short_name' => 'TB Buccaneers', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Tennessee Titans', 'short_name' => 'TEN Titans', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Washington Commanders', 'short_name' => 'WSH Commanders', 'league' => 'NFL', 'created_at' => NOW(), 'updated_at' => NOW(),]);

        // NHL teams for testing
        DB::table('teams')->insert(['name' => 'Anaheim Ducks', 'short_name' => 'ANA Ducks', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Arizona Coyotes', 'short_name' => 'ARI Coyotes', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Boston Bruins', 'short_name' => 'BOS Bruins', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Buffalo Sabres', 'short_name' => 'BUF Sabres', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Calgary Flames', 'short_name' => 'CGY Flames', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Carolina Hurricanes', 'short_name' => 'CAR Hurricanes', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Chicago Blackhawks', 'short_name' => 'CHI Blackhawks', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Colorado Avalanche', 'short_name' => 'COL Avalanche', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Columbus Blue Jackets', 'short_name' => 'CBJ Blue Jackets', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Dallas Stars', 'short_name' => 'DAL Stars', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Detroit Red Wings', 'short_name' => 'DET Red Wings', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Edmonton Oilers', 'short_name' => 'EDM Oilers', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Florida Panthers', 'short_name' => 'FLA Panthers', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Los Angeles Kings', 'short_name' => 'LA Kings', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Minnesota Wild', 'short_name' => 'MIN Wild', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Montréal Canadiens', 'short_name' => 'MTL Canadiens', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Nashville Predators', 'short_name' => 'NSH Predators', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New Jersey Devils', 'short_name' => 'NJ Devils', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New York Islanders', 'short_name' => 'NY Islanders', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New York Rangers', 'short_name' => 'NY Rangers', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Ottawa Senators', 'short_name' => 'OTT Senators', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Philadelphia Flyers', 'short_name' => 'PHI Flyers', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Pittsburgh Penguins', 'short_name' => 'PIT Penguins', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'San Jose Sharks', 'short_name' => 'SJ Sharks', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Seattle Kraken', 'short_name' => 'SEA Kraken', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'St Louis Blues', 'short_name' => 'STL Blues', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Tampa Bay Lightning', 'short_name' => 'TB Lightning', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Toronto Maple Leafs', 'short_name' => 'TOR Maple Leafs', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Vancouver Canucks', 'short_name' => 'VAN Canucks', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Vegas Golden Knights', 'short_name' => 'VGS Golden Knights', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Washington Capitals', 'short_name' => 'WSH Capitals', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Winnipeg Jets', 'short_name' => 'WPG Jets', 'league' => 'NHL', 'created_at' => NOW(), 'updated_at' => NOW(),]);

        // NBA teams for testing
        DB::table('teams')->insert(['name' => 'Atlanta Hawks', 'short_name' => 'ATL Hawks', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Boston Celtics', 'short_name' => 'BOS Celtics', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Brooklyn Nets', 'short_name' => 'BKN Nets', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Charlotte Hornets', 'short_name' => 'CHA Hornets', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Chicago Bulls', 'short_name' => 'CHI Bulls', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Cleveland Cavaliers', 'short_name' => 'CLE Cavaliers', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Dallas Mavericks', 'short_name' => 'DAL Mavericks', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Denver Nuggets', 'short_name' => 'DEN Nuggets', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Detroit Pistons', 'short_name' => 'DET Pistons', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Golden State Warriors', 'short_name' => 'GS Warriors', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Houston Rockets', 'short_name' => 'HOU Rockets', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Indiana Pacers', 'short_name' => 'IND Pacers', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Los Angeles Clippers', 'short_name' => 'LA Clippers', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Los Angeles Lakers', 'short_name' => 'LA Lakers', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Memphis Grizzlies', 'short_name' => 'MEM Grizzlies', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Miami Heat', 'short_name' => 'MIA Heat', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Milwaukee Bucks', 'short_name' => 'MIL Bucks', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Minnesota Timberwolves', 'short_name' => 'MIN Timberwolves', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New Orleans Pelicans', 'short_name' => 'NO Pelicans', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'New York Knicks', 'short_name' => 'NY Knicks', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Oklahoma City Thunder', 'short_name' => 'OKC Thunder', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Orlando Magic', 'short_name' => 'ORL Magic', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Philadelphia 76ers', 'short_name' => 'PHI 76ers', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Phoenix Suns', 'short_name' => 'PHX Suns', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Portland Trail Blazers', 'short_name' => 'POR Trail Blazers', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Sacramento Kings', 'short_name' => 'SAC Kings', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'San Antonio Spurs', 'short_name' => 'SA Spurs', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Toronto Raptors', 'short_name' => 'TOR Raptors', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Utah Jazz', 'short_name' => 'UTA Jazz', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
        DB::table('teams')->insert(['name' => 'Washington Wizards', 'short_name' => 'WSH Wizards', 'league' => 'NBA', 'created_at' => NOW(), 'updated_at' => NOW(),]);
    }
}
