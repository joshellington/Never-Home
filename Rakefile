ssh_user = "ellingtj@joshellington.com" # for rsync deployment
remote_root = "/home/ellingtj/neverhomemusic.com/"
stage_remote_root = "/home/ellingtj/joshellington.com/neverhome/"

task :deploy do
    system("rsync --exclude-from=rsync.exclude -rcv . #{ssh_user}:#{remote_root}")
end

task :deploy_delete do
  system("rsync --exclude-from=rsync.exclude -rcv --delete . #{ssh_user}:#{remote_root}")
end

task :fake do
    system("rsync --exclude-from=rsync.exclude -rcvn . #{ssh_user}:#{remote_root}")
end

task :fake_delete do
  system("rsync --exclude-from=rsync.exclude -rcvn --delete . #{ssh_user}:#{remote_root}")
end

task :pull do
    system("rsync --exclude-from=rsync.exclude -rcv #{ssh_user}:#{remote_root} .")
end

task :deploystage do
    system("rsync --exclude-from=rsync.exclude -rcv . #{stage_ssh_user}:#{stage_remote_root}")
end

task :deploystage_delete do
    system("rsync --exclude-from=rsync.exclude -rcv --delete . #{stage_ssh_user}:#{stage_remote_root}")
end

task :fakestage do
    system("rsync --exclude-from=rsync.exclude -rcvn . #{stage_ssh_user}:#{stage_remote_root}")
end

task :fakestage_delete do
    system("rsync --exclude-from=rsync.exclude -rcvn --delete . #{stage_ssh_user}:#{stage_remote_root}")
end